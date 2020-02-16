<?php

$request_uri = $_SERVER['REQUEST_URI'];
//var_dump($request);


switch ($request_uri) {
    case '':
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '/pricing' :
        require __DIR__ . '/pricing.php';
        break;
    case '/contact' :
        require __DIR__ . '/contact.php';
        break;
    case '/contact-options' :
        require __DIR__ . '/contact-options.php';
        break;
    case '/about' :
        require __DIR__ . '/about.php';
        break;
    case '/services' :
        require __DIR__ . '/services.php';
        break;
    case '/thanks' :
        require __DIR__ . '/thanks.php';
        break;
    case '/coming-soon' :
        require __DIR__ . '/coming-soon.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
