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
              sleep(1);
              print_r($result);
              break;

            case 'leasttransfer':


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