<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// $app->get('/adm/member_{filename_suffix}', function (Request $request, Response $response, $args) {
//     $filename_suffix = $args['filename_suffix'];
//     require_once "../adm/member_{$filename_suffix}.php";
//     return $response;
// });

// $app->post('/adm/member_{filename_suffix}', function (Request $request, Response $response, $args) {
//     $filename_suffix = $args['filename_suffix'];
//     require_once "../adm/member_{$filename_suffix}.php";
//     return $response;
// });

$app->get('/adm/member_list', function (Request $request, Response $response, $args) {
    require_once '../adm/member_list.php';
    return $response;
});

$app->get('/adm/member_form', function (Request $request, Response $response, $args) {
    require_once '../adm/member_form.php';
    return $response;
});

$app->post('/adm/member_form_update', function (Request $request, Response $response, $args) {
    require_once '../adm/member_form_update.php';
    return $response;
});

$app->post('/adm/member_list_update', function (Request $request, Response $response, $args) {
    require_once '../adm/member_list_update.php';
    return $response;
});

$app->get('/adm/mail_list', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_list.php';
    return $response;
});

$app->get('/adm/mail_form', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_form.php';
    return $response;
});

$app->post('/adm/mail_update', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_update.php';
    return $response;
});

$app->get('/adm/mail_test', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_test.php';
    return $response;
});

$app->get('/adm/mail_preview', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_preview.php';
    return $response;
});

$app->get('/adm/mail_select_form', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_select_form.php';
    return $response;
});

$app->post('/adm/mail_select_list', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_select_list.php';
    return $response;
});

$app->post('/adm/mail_select_update', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_select_update.php';
    return $response;
});

$app->post('/adm/mail_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/mail_delete.php';
    return $response;
});

$app->get('/adm/visit_list', function (Request $request, Response $response, $args) {
    require_once '../adm/visit_list.php';
    return $response;
});

$app->get('/adm/visit_search', function (Request $request, Response $response, $args) {
    require_once '../adm/visit_search.php';
    return $response;
});

$app->get('/adm/visit_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/visit_delete.php';
    return $response;
});

$app->post('/adm/visit_delete_update', function (Request $request, Response $response, $args) {
    require_once '../adm/visit_delete_update.php';
    return $response;
});

$app->get('/adm/point_list', function (Request $request, Response $response, $args) {
    require_once '../adm/point_list.php';
    return $response;
});

$app->post('/adm/point_list_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/point_list_delete.php';
    return $response;
});

$app->post('/adm/point_update', function (Request $request, Response $response, $args) {
    require_once '../adm/point_update.php';
    return $response;
});

$app->get('/adm/poll_list', function (Request $request, Response $response, $args) {
    require_once '../adm/poll_list.php';
    return $response;
});

$app->get('/adm/poll_form', function (Request $request, Response $response, $args) {
    require_once '../adm/poll_form.php';
    return $response;
});

$app->post('/adm/poll_form_update', function (Request $request, Response $response, $args) {
    require_once '../adm/poll_form_update.php';
    return $response;
});

$app->post('/adm/poll_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/poll_delete.php';
    return $response;
});
