<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 31-May-17
 * Time: 15:15
 */
class Registry {
  private $vars = array();

  public function __set($index, $value)
  {
    $this->vars[$index] = $value;
  }

  public function __get($index)
  {
    return $this->vars[$index];
  }
}