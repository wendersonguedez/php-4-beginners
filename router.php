<?php

/**
 * => /
 * => /about
 * => /contact 
 */
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];

routeToController($uri, $routes);

function abort($status_code = 404)
{
    http_response_code($status_code);

    require "views/{$status_code}.view.php";
    die();
}

function routeToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        abort();
    }
    require $routes[$uri];
}