<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/plugin/kcapthca', function (Request $request, Response $response, $args) {
    require_once '../plugin/kcaptcha.php';
    return $response;
});

$app->post('/plugin/kcaptcha/kcaptcha_session', function (Request $request, Response $response, $args) {
    require_once '../plugin/kcaptcha/kcaptcha_session.php';
    return $response;
});

$app->post('/plugin/kcaptcha/kcaptcha_mp3', function (Request $request, Response $response, $args) {
    require_once '../plugin/kcaptcha/kcaptcha_mp3.php';
    return $response;
});

$app->get('/plugin/kcaptcha/kcaptcha_image', function (Request $request, Response $response, $args) {
    require_once '../plugin/kcaptcha/kcaptcha_image.php';
    return $response;
});

$app->post('/plugin/kcaptcha/kcaptcha_result', function (Request $request, Response $response, $args) {
    require_once '../plugin/kcaptcha/kcaptcha_result.php';
    return $response;
});
