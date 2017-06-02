<?php
/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 15-May-17
 * Time: 11:10
 */
require_once(__DIR__ . "/config/config.php");

spl_autoload_register('autoLoadClass');

//autoload for model and libs
function autoLoadClass($class) {
  $file = ROOT_PATH . '/libs/' . $class . '.class.php';
  if (file_exists($file)) {
    require_once $file;
  }
  else {
    $file = ROOT_PATH . '/model/' . $class . '.php';
    if (file_exists($file)) {
      require_once $file;
    }
  }
}

$registry = new Registry();

/*** load the router ***/
$registry->router = new Router($registry);

/*** load up the template ***/
$registry->template = new View($registry);

/*** load the controller ***/
$registry->router->processURI($_SERVER['REQUEST_URI']);

