<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; // Extracts the path of the URL ignoring any query strings

$routes = [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/notes' => 'controllers/notes.php',
  '/note' => 'controllers/note.php',
  '/contact' => 'controllers/contact.php'
];

function routeToController($uri, $routes) {
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abortReq(404);
  }
}

function abortReq($httpCode = 404) {
  http_response_code($httpCode);

  require "views/{$httpCode}.php";

  die();
}

routeToController($uri, $routes);