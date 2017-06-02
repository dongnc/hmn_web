<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 31-May-17
 * Time: 15:22
 */
class indexController extends BaseController {
  function processRequest($uriElement) {
    switch (count($uriElement)) {
      default:
        $this->index();
    }
  }

  function index() {
    $this->setVar('title', 'Hanoi Metro Navigation');
    $this->registry->template->render('home');
  }
}