<?php

require_once __DIR__.'\autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = array(
'/oi' => __DIR__.'/oi.php',
'/tchau' => __DIR__.'/tchau.php',
);

$path = $request->getPathInfo();

if (isset($map[$path])) {
    require $map[$path];
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();