var searchForm = $('#searchForm');
var sideBar = $('#sideBar');


var state = 'info';
$(document).on({
  ajaxStart: function () {
    $("#infoSection").html("");
    $('#loading').show();
  },
  ajaxStop: function () {
    $('#loading').hide();
  }
});

// panzoom script
(function () {
  var $section = $('#map');
  var $panzoom = $section.find('.panzoom').panzoom({
      $zoomIn: $section.find(".zoom-in"),
      $zoomOut: $section.find(".zoom-out"),
      $zoomRange: $section.find(".zoom-range"),
      //$reset: $section.find(".reset"),
      //contain: 'invert',
      minScale: 0.3,
      maxScale: 1.5
    }
  ).panzoom('zoom');
  $panzoom.parent().on('mousewheel.focal', function (e) {
    e.preventDefault();
    var delta = e.delta || e.originalEvent.wheelDelta;
    var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
    $panzoom.panzoom('zoom', zoomOut, {
      animate: false,
      focal: e
    });
  });
  $panzoom.panzoom("zoom", 1);
  $panzoom.panzoom("pan", -1500, -1700);
})();
//////////////////////////
var $section = $('#map');
$panzoom = $section.find('.panzoom');
function pan() {
  $panzoom.panzoom("pan", 100, -100, {relative: true});
}
function resetPan() {
  $panzoom.panzoom("zoom", 1, {animate: true});
  $panzoom.panzoom("pan", -1500, -1700);
}
function zoom() {
  $panzoom.panzoom("zoom", 3, {animate: true});
}

// image mapster
$('#mapImg').mapster({
  // render option
  fill: false,
  stroke: true,
  strokeWidth: 4,
  hightlight: true,
  render_highlight: {
    strokeColor: '00ff00'
  },
  render_select: {
    strokeColor: 'ff0000'
  },
  showToolTip: true,
  // click option
  mapKey: 'data',
  onClick: function getInfo(e) {
    $('area').mapster('deselect'); //deselect all area
    if (state === 'info') {
      var key = e.key;
      $(".sideBar").addClass('sideBarShow');
      if (key.search("station") === 0) {
        var stationId = key.substr(8);
        $.get("stations/" + stationId + "/arrivaltimeinfo", function (data) {
          $("#infoSection").html(data);
        });
        $.ajax({
          url: "stations/" + stationId + "/name",
          global: false,
          success: function (data) {
            searchForm.find(":input").val(data);
          }
        });
      }
      else if (key.search("line") === 0) {
        var lineId = key.substr(5);
        $.get("lines/" + lineId, function (data) {
          $("#infoSection").html(data);
        });
        $.ajax({
          url: "lines/" + lineId + "/codename",
          global: false,
          success: function (data) {
            searchForm.find(":input").val(data);
          }
        });
      }
    } else { //////////////////////////// navi state
      var key = e.key;
      console.log("key" + key);
      if ( $('.selectStartLocationContainer :input').is(":focus")) {
        $('#selectStartLocation').val(key);
        $('.selectStartLocationContainer :input').val($('#selectStartLocation option:selected').text());
        //$('.selectStartLocationContainer :input').click();
        $('.selectDestinationContainer :input').focus();
        naviInput();
      } else if ($('.selectDestinationContainer :input').is(":focus")) {
        $('#selectDestination').val(key);
        $('.selectDestinationContainer :input').val($('#selectDestination option:selected').text());
        //$('.selectDestinationContainer :input').click();
        $('.selectStartLocationContainer :input').focus();
        naviInput();
      }
    }
  }
});


//search box
(function ($) {
  $(function () {
    $('#selectSearch').selectToAutocomplete();
  });
})(jQuery);
$("#selectSearch").on('change', search);
function search() {
  var optionId = $('#selectSearch').val();
  if (optionId !== '') {
    sideBar.addClass('sideBarShow');
    if (optionId.search("station") === 0) {
      var stationId = optionId.substr(8);
      $.get("stations/" + stationId + "/arrivaltimeinfo", function (data) {
        $("#infoSection").html(data);
      });
    } else if (optionId.search("line") === 0) {
      var lineId = optionId.substr(5);
      $.get("lines/" + lineId, function (data) {
        $("#infoSection").html(data);
      });
    }
    $('area').mapster('deselect');
    $('#mapImg').mapster('set',true,optionId);
  }
  return false;
}


(function ($) {
  $(function () {
    $('#selectStartLocation').selectToAutocomplete();
    $('#selectDestination').selectToAutocomplete();
  });
})(jQuery);

$("#selectStartLocation").on('change', naviInput);
$("#selectDestination").on('change', naviInput);
$('input[name="routeType"]').on('change', naviInput);

function exchangeLocation() {
  console.log("exchange");
  var startInput = $('.selectStartLocationContainer :input').val();
  var destInput = $('.selectDestinationContainer :input').val();
  var startInputText = $('#selectStartLocation option:selected').text();
  var destInputText = $('#selectDestination option:selected').text();
  $('.selectStartLocationContainer :input').val(destInputText);
  $('.selectDestinationContainer :input').val(startInputText);
  $('#selectStartLocation').val(destInput);
  $('#selectDestination').val(startInput);
  naviInput();
}

function naviInput() {
  console.log('change');
  var startOptionId = $('#selectStartLocation').val();
  var destOptionId = $('#selectDestination').val();
  console.log("naviInput " + startOptionId, destOptionId);
  if (startOptionId === '' && destOptionId === '') return false;
  if (startOptionId !== '') {
    if (destOptionId === '') {
      $('.selectDestinationContainer :input').focus();
    } else navi(startOptionId, destOptionId);
  } else {
    if (startOptionId === '') {
      $('.selectStartLocationContainer :input').focus();
    } else navi(startOptionId, destOptionId);
  }
  return false;
}

function navi(startOptionId, destOptionId) {
  console.log(startOptionId, destOptionId);
  var startId = startOptionId.substr(8);
  var destId = destOptionId.substr(8);
  var routeType = $('#naviForm :input[name="routeType"]:checked').val();
  console.log("routeType" + routeType);
  if (routeType === '') {
    routeType = 'shortest';
    $('input[name="routeType"]:checked').val('shortest');
  }
  console.log("nav/" + startId + "/" + destId + "/" + routeType);
  $.get("nav/" + startId + "/" + destId + "/" + routeType, function (data) {
    $("#infoSection").html(data);
  });
}

function changeState() {
  $("#infoSection").html("");
  $('area').mapster('deselect');
  if (state === 'info') {
    state = 'navi';
    $("#searchForm :input").val('');
    $("#searchForm").hide();
    $("#naviForm").show();
   sideBar.addClass('sideBarShow');
   sideBar.addClass('naviSideBar');
    $('.selectStartLocationContainer :input').focus();
  } else {
    state = 'info';
    $("#naviForm :input").val('');
    $("#searchForm").show();
    $("#naviForm").hide();
   sideBar.removeClass('sideBarShow');
   sideBar.removeClass('naviSideBar');
    $('area').mapster('deselect');
    $("#searchForm :input").focus();
  }
}

$('#infoCloseBtn').on('click',closeInfo);
function closeInfo() {
  console.log('ss');
  $("#searchForm :input").val('');
 sideBar.removeClass('sideBarShow');
  $('area').mapster('deselect');
  $(".selectSearchContainer :input").focus();
}