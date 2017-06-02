<div class="row">
  <div class="col-xs-6">
    <h3><?php echo $time ?></h3>
  </div>
  <div class="col-xs-6">
    <h3><?php echo number_format($fare*1000) . "đ" ?></h3>
  </div>
</div>
<div class="naviStation">
  <span>Start at <strong><?php echo $route[0]['stationName']?></strong></span>
  <div><small>Towards <?php echo $route[0]['toward']?></small></div>
</div>
<?php foreach ($route as $index => $station) {
  if ($station['isLineChanged'] == 1) { ?>
    <div class="naviStation">
      <span>Change at <strong><?php echo $route[$index]['stationName']?></strong></span>
      <div><small>Towards <?php echo $route[$index]['toward']?></small></div>
    </div>
  <?php }
} ?>
<div class="naviStation">
  <span>Arrival at <strong><?php echo $route[count($route)-1]['stationName']?></strong></span>
</div>
