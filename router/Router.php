<?php

class Router
{
  private static $routes = array();

  public static function get($url, $handler)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      array_push(self::$routes, array(
        'route' => $url,
        'function' => $handler,
        'method' => 'GET'
      ));
    } else {
      echo 'No se puede hacer get a ' . $url;
    }
  }

  public static function post($url, $handler)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      array_push(self::$routes, array(
        'route' => $url,
        'function' => $handler,
        'method' => 'POST'
      ));
    } else {
      echo 'No se puede hacer post a ' . $url;
    }
  }
}
