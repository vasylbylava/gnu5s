<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/install[/]', function (Request $request, Response $response, $args) {
    require_once '../install/index.php';
    return $response;
});

$app->post('/install_config[/]', function (Request $request, Response $response, $args) {
    require_once '../install/install_config.php';
    return $response;
});

$app->post('/install_db[/]', function (Request $request, Response $response, $args) {
    require_once '../install/install_db.php';
    return $response;
});
