<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 02-Jun-17
 * Time: 23:52
 */
class NavController extends BaseController {
  function processRequest($uriElement) {
    switch (count($uriElement)) {
      case 3: //API: /nav/xyz/xyz/xyz
        if (is_numeric($uriElement[0]) && is_numeric($uriElement[1])) {
          $startStation = $uriElement[0];
          $endStation = $uriElement[1];
          switch ($uriElement[2]) {
            case 'shortest':
              $url = API_ROOT . "/nav/$startStation/$endStation/shortest" ;
              $response = API::request("GET", $url);
              $result = json_decode($response, true);
              foreach ($result as $key => $value) {
                $this->setVar($key, $value);
              }
              $time = explode(':', $result['time']);
              if ($time[0] == '00')
                $totalTime = intval($time[1]) . " mins";
              else {
                $totalTime = intval($time[0]) . " hr " . intval($time[1]) . " mins";
              }
              $this->setVar('time', $totalTime);
              $this->render('navResult');
              break;

            case 'leasttransfer':
              $url = API_ROOT . "/nav/$startStation/$endStation/leasttransfer" ;
              $response = API::request("GET", $url);
              $result = json_decode($response, true);
              foreach ($result as $key => $value) {
                $this->setVar($key, $value);
              }
              $time = explode(':', $result['time']);
              if ($time[0] == '00')
                $totalTime = intval($time[1]) . " mins";
              else {
                $totalTime = intval($time[0]) . " hr " . intval($time[1]) . " mins";
              }
              $this->setVar('time', $totalTime);
              $this->render('navResult');
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

}