<?php

define ('ROOT', $_SERVER['DOCUMENT_ROOT']);


spl_autoload_register(function ($class_name) {
  $arrayPath = [
    '/classes/',
    '/controllers/',
    '/models/',
    '/view/'
  ];

  foreach($arrayPath as $path) {

    $path = ROOT . $path . $class_name . '.php';

    if (is_file($path)) {
      include $path;
    }

  }
});

$router = new Router;

?>