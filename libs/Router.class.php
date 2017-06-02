<?php

class Router {
  /*
  * @the registry
  */
  private $registry;
  public $file;
  public $controller;
  public $action;
  public $uriElement = array();
  public $mainEndpoint;

  function __construct($registry) {
    $this->registry = $registry;
  }

  public function processURI($uri)
  {
    $uri = strtolower($uri);
    $this->uriElement = explode('/', trim($uri, '/'));
    $this->mainEndpoint = array_shift($this->uriElement);

    if ($this->mainEndpoint == '') $this->mainEndpoint = 'index';
    $controller = ucfirst(rtrim($this->mainEndpoint,"s")) . 'Controller';
    //echo 'controller = ' . $controller . '<br>';
    if (!file_exists(CONTROLLER_PATH . "/" . $controller . ".php")) {
      die ("Controller $controller file not found!");
    }
    require_once CONTROLLER_PATH . "/" . $controller . ".php";
    if (!class_exists($controller)) {
      die ("Controller $controller class not found!");
    }
    /**
     * @var BaseController $controllerObject
     */
    $controllerObject = new $controller($this->registry);
    $controllerObject->processRequest($this->uriElement);

  }
  
}
