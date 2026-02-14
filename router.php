<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];


function routeToControllers($url, $routes)
{
    // checking the array key is exist or not if exite than requires
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

// create a abort fn set default 404
function abort($code = 404)
{
    http_response_code(404);

    require "controllers/{$code}.php";

    die();
}

routeToControllers($url, $routes);
