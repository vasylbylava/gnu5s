<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/adm/board_list', function (Request $request, Response $response, $args) {
    require_once '../adm/board_list.php';
    return $response;
});

$app->get('/adm/board_form', function (Request $request, Response $response, $args) {
    require_once '../adm/board_form.php';
    return $response;
});

$app->post('/adm/board_form_update', function (Request $request, Response $response, $args) {
    require_once '../adm/board_form_update.php';
    return $response;
});

$app->post('/adm/board_list_update', function (Request $request, Response $response, $args) {
    require_once '../adm/board_list_update.php';
    return $response;
});

$app->post('/adm/board_list_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/board_list_delete.php';
    return $response;
});

$app->get('/adm/board_copy', function (Request $request, Response $response, $args) {
    require_once '../adm/board_copy.php';
    return $response;
});

$app->post('/adm/board_copy_update', function (Request $request, Response $response, $args) {
    require_once '../adm/board_copy_update.php';
    return $response;
});

$app->get('/adm/board_thumbnail_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/board_thumbnail_delete.php';
    return $response;
});

$app->get('/adm/boardgroup_list', function (Request $request, Response $response, $args) {
    require_once '../adm/boardgroup_list.php';
    return $response;
});

$app->get('/adm/boardgroup_form', function (Request $request, Response $response, $args) {
    require_once '../adm/boardgroup_form.php';
    return $response;
});

$app->post('/adm/boardgroup_form_update', function (Request $request, Response $response, $args) {
    require_once '../adm/boardgroup_form_update.php';
    return $response;
});

$app->post('/adm/boardgroup_list_update', function (Request $request, Response $response, $args) {
    require_once '../adm/boardgroup_list_update.php';
    return $response;
});

$app->map(['GET', 'POST'], '/adm/popular_list', function (Request $request, Response $response, $args) {
    require_once '../adm/popular_list.php';
    return $response;
});

$app->get('/adm/popular_rank', function (Request $request, Response $response, $args) {
    require_once '../adm/popular_rank.php';
    return $response;
});

$app->map(['GET', 'POST'], '/adm/qa_config', function (Request $request, Response $response, $args) {
    require_once '../adm/qa_config.php';
    return $response;
});

$app->post('/adm/qa_config_update', function (Request $request, Response $response, $args) {
    require_once '../adm/qa_config_update.php';
    return $response;
});

$app->get('/adm/contentlist', function (Request $request, Response $response, $args) {
    require_once '../adm/contentlist.php';
    return $response;
});

$app->get('/adm/contentform', function (Request $request, Response $response, $args) {
    require_once '../adm/contentform.php';
    return $response;
});

$app->map(['GET', 'POST'], '/adm/contentformupdate', function (Request $request, Response $response, $args) {
    require_once '../adm/contentformupdate.php';
    return $response;
});

$app->post('/adm/ajax_use_captcha', function (Request $request, Response $response, $args) {
    require_once '../adm/ajax_use_captcha.php';
    return $response;
});

$app->get('/adm/faqmasterlist', function (Request $request, Response $response, $args) {
    require_once '../adm/faqmasterlist.php';
    return $response;
});

$app->get('/adm/faqmasterform', function (Request $request, Response $response, $args) {
    require_once '../adm/faqmasterform.php';
    return $response;
});

$app->map(['GET', 'POST'], '/adm/faqmasterformupdate', function (Request $request, Response $response, $args) {
    require_once '../adm/faqmasterformupdate.php';
    return $response;
});

$app->get('/adm/faqlist', function (Request $request, Response $response, $args) {
    require_once '../adm/faqlist.php';
    return $response;
});

$app->get('/adm/faqform', function (Request $request, Response $response, $args) {
    require_once '../adm/faqform.php';
    return $response;
});

$app->map(['GET', 'POST'], '/adm/faqformupdate', function (Request $request, Response $response, $args) {
    require_once '../adm/faqformupdate.php';
    return $response;
});

$app->get('/adm/write_count', function (Request $request, Response $response, $args) {
    require_once '../adm/write_count.php';
    return $response;
});
