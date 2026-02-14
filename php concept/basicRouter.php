<?php


require 'functions.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

// checking the array key is exist or not if exite than requires
if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    http_response_code(404);

    require 'controllers/404.php';

    die();
}
