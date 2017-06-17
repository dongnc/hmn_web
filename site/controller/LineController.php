<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 02-Jun-17
 * Time: 10:36
 */
class LineController extends BaseController {
  function processRequest($uriElement) {
    switch (count($uriElement)) {
      case 0: //API: /lines
        //return $this->getLineList();

      case 1: //API: /lines/xyz
        if (is_numeric($uriElement[0])) {
          $lineId = $uriElement[0];
          $this->getLineInfo($lineId);
        } else {
          switch ($uriElement[0]) {
            case "arealist":
              $this->getAreaList();
              break;

            case "optionlist":
              $this->getSelectOptionList();
              break;

            default:
              $this->badRequestResponse();
          }
        }
        break;

      case 2: //API: /lines/xyz/xyz
        if (is_numeric($uriElement[0])) {
          $lineId = $uriElement[0];
          switch ($uriElement[1]) {
            case "codename":
              $this->getLineCodeName($lineId);
              break;

            case "arrivaltimeinfo":
              $this->getArrivalTimeInfo($lineId);
              break;

            default:
              $this->badRequestResponse();
          }
        } else $this->badRequestResponse();
        break;

      default:
        $this->badRequestResponse();
    }
  }

  function getLineCodeName($lineId) {
    $url = API_ROOT . "/lines/" . $lineId;
    $response = API::request("GET", $url);
    $line = json_decode($response, true);
    echo $line['code'] . ": " . $line['name'];
  }

  function getLineInfo($lineId) {
    $url = API_ROOT . "/lines/" . $lineId;
    $response = API::request("GET", $url);
    $line = json_decode($response, true);
    foreach ($line as $key => $value) {
      $this->setVar($key, $value);
    }
    $this->render('lineInfo');
  }

  function getArrivalTimeInfo($stationId) {
    $url = API_ROOT . "/lines/" . $stationId . "/name";
    $stationName = json_decode(API::request("GET", $url), true);
    $url = API_ROOT . "/lines/" . $stationId . "/arrivaltimeinfo";
    $response = API::request("GET", $url);
    $arrivalTimeInfo = json_decode($response, true);
    $this->setVar('stationName', $stationName);
    $this->setVar('arrivalTimeInfo', $arrivalTimeInfo);
    $this->render('stationInfo');
  }

  function getAreaList() {
    $lineList = json_decode(API::request("GET", API_ROOT . "/lines"), true);
    foreach ($lineList as $line) {
      echo '<area href="#" data="line_' . $line['id'] . '" shape="circle" coords="' . $line['coords1'] . '"/>' . PHP_EOL;
      echo '<area href="#" data="line_' . $line['id'] . '" shape="circle" coords="' . $line['coords2'] . '"/>' . PHP_EOL;
    }
  }

  function getSelectOptionList() {
    $lineList = json_decode(API::request("GET", API_ROOT . "/line"), true);
    foreach ($lineList as $line) {
      $noDiac = Util::noDiacritic($line['name']);
      $abb = Util::abbreviate($line['name']);
      echo '<option value="line_' . $line['id'] . '" data-alternative-spellings="'. $noDiac . ' ' . $abb . '"' . '>' . $line['code'] . ": " . $line['name'] . '</option>' . PHP_EOL;
    }
  }
}