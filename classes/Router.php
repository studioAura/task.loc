<?php

class Router
{

  public function __construct()
  {
    $url = $_GET['url'];
    $url = explode('/', $url);

    $parameter = array_keys($_GET);
    $paramName = $parameter[1];
    $paramValue = $_GET[$paramName];
    $paramName2 = $parameter[2];
    $paramValue2 = $_GET[$paramName2];

    $params = compact("paramName", "paramValue", "paramValue2");

    if (empty($url[0]))
    {
      $controller = new Index();
      $controller -> action();
    } elseif (!empty($url[0]) && empty($url[1]))
    {
      $class = $url[0];
      $controller = new $class();
      $controller -> action();
    } elseif (!empty($url[0]) && !empty($url[1]))
    {
      $class = $url[0];
      $method = $url[1];
      $controller = new $class();
      $controller -> $method($params);
    }
  }

}