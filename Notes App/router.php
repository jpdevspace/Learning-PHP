<?php

$routes = require("routes.php");

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abortReq(404);
  }
}

function abortReq($httpCode = 404)
{
  http_response_code($httpCode);

  require "views/{$httpCode}.php";

  die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; // Extracts the path of the URL ignoring any query strings

routeToController($uri, $routes);
