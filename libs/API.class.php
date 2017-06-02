<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 01-Jun-17
 * Time: 16:28
 */
class API {
  static function request($method, $url, $data = false) {
    $curl = curl_init();

    switch ($method) {
      case "GET":
        break;

      case "POST":
        curl_setopt($curl, CURLOPT_POST, true);
        if ($data)
          curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        break;

      case "PUT":
        curl_setopt($curl, CURLOPT_PUT, 1);
        break;

      default:
        if ($data)
          $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);

    curl_close($curl);
    return $result;
  }
}