<?php

/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 31-May-17
 * Time: 15:56
 */
class View {
  private $registry;
  private $vars = array();

  function __construct($registry) {
    $this->registry = $registry;
  }

  public function __set($index, $value)
  {
    $this->vars[$index] = $value;
  }

  function render($templateName) {
    $path = VIEW_PATH . '/' . $templateName . '.php';
    if (file_exists($path) == false)
    {
      die ('Template not found: '. $path);
    }

    // Load variables
    foreach ($this->vars as $var => $value)
    {
      $$var = $value;
    }
    include ($path);
  }

}