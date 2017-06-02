<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 31-May-17
 * Time: 15:20
 */
abstract class BaseController {
  protected $registry;

  abstract function processRequest($uriElement);

  function __construct($registry) {
    $this->registry = $registry;
  }

  function setVar($var, $value) {
    $this->registry->template->$var = $value;
  }

  function render($template) {
    $this->registry->template->render($template);
  }

  function badRequestResponse() {
    echo "Bad request!";
  }
}