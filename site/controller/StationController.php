<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 01-Jun-17
 * Time: 17:11
 */
class stationController extends BaseController {
  function processRequest($uriElement) {
    switch (count($uriElement)) {
      case 0: //API: /stations
        //return $this->getStationList();

      case 1: //API: /stations/xyz
        if (is_numeric($uriElement[0])) {
          $stationId = $uriElement[0];
          $this->getStationInfo($stationId);
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

      case 2: //API: /stations/xyz/xyz
        if (is_numeric($uriElement[0])) {
          $stationId = $uriElement[0];
          switch ($uriElement[1]) {
            case "name":
              $this->getStationName($stationId);
              break;

            case "arrivaltimeinfo":
              $this->getArrivalTimeInfo($stationId);
              break;

            default:
              $this->badRequestResponse();
          }
        } else $this->badRequestResponse();
        break;

      /* case 3: //API: /stations/xyz/xyz/xyz
         if (is_numeric($uriElement[0])) {
           $stationId = $uriElement[0];
           switch ($uriElement[1]) {
             case "nexttrain":
               if (is_numeric($uriElement[2])) {
                 $arrivalTime = new ArrivalTime();
                 return $arrivalTime->getNextTrainArrivalTime($stationId, $uriElement[2]);
               } else $this->badRequestResponse();

             default:
               $this->badRequestResponse();
           }
         } else $this->badRequestResponse();*/

      default:
        $this->badRequestResponse();
    }
  }

  function getStationName($stationId) {
    $url = API_ROOT . "/stations/" . $stationId . "/name";
    $responseJSON = API::request("GET", $url);
    $response = json_decode($responseJSON, true);
    echo $response;
  }

  function getStationInfo($stationId) {
    $url = API_ROOT . "/stations/" . $stationId;
    $responseJSON = API::request("GET", $url);
    $response = json_decode($responseJSON, true);
    var_dump($response);
  }

  function getArrivalTimeInfo($stationId) {
    $url = API_ROOT . "/stations/" . $stationId . "/name";
    $stationName = json_decode(API::request("GET", $url), true);
    $url = API_ROOT . "/stations/" . $stationId . "/arrivaltimeinfo";
    $response = API::request("GET", $url);
    $arrivalTimeInfo = json_decode($response, true);
    $this->setVar('stationName', $stationName);
    $this->setVar('arrivalTimeInfo', $arrivalTimeInfo);
    $this->render('arrivalTimeInfo');
  }

  function getAreaList() {
    $stationList = json_decode(API::request("GET", API_ROOT . "/stations"), true);
    foreach ($stationList as $station) {
      echo '<area href="#" data="station_' . $station['id'] . '" shape="' . $station['shape'] . '" coords="' . $station['coords'] . '"/>' . PHP_EOL;
    }
  }

  function getSelectOptionList() {
    $stationList = json_decode(API::request("GET", API_ROOT . "/stations"), true);
    foreach ($stationList as $station) {
      $noDiac = Util::noDiacritic($station['name']);
      $abb = Util::abbreviate($station['name']);
      echo '<option value="station_' . $station['id'] . '" data-alternative-spellings="'. $noDiac . ' ' . $abb . '"' . '>' . $station['name'] . '</option>' . PHP_EOL;
    }
  }
}