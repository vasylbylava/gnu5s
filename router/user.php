<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    global $name;
    $name = $args['name'];
    function get_name() {
        global $name;
        return $name;
    }
    $response->getBody()->write("Hello, ".get_name());
    return $response;
});
