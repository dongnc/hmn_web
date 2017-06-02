<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 01-Jun-17
 * Time: 16:34
 */
class testController extends BaseController {
  function processRequest($uriElement) {
    switch (count($uriElement)) {
      default:
        $this->index();
    }
  }

  function index() {
    /* Test code goes here */


  echo Util::abbreviate('ha noi á mot');




    /* end test code */
  }
}