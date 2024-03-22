<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('/adm', function ($group) {

    $group->get('/member_list', function (Request $request, Response $response, $args) {
        require_once '../adm/member_list.php';
        return $response;
    });

    $group->get('/member_form', function (Request $request, Response $response, $args) {
        require_once '../adm/member_form.php';
        return $response;
    });

    $group->post('/member_form_update', function (Request $request, Response $response, $args) {
        require_once '../adm/member_form_update.php';
        return $response;
    });

    $group->post('/member_list_update', function (Request $request, Response $response, $args) {
        require_once '../adm/member_list_update.php';
        return $response;
    });

    $group->get('/mail_list', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_list.php';
        return $response;
    });

    $group->get('/mail_form', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_form.php';
        return $response;
    });

    $group->post('/mail_update', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_update.php';
        return $response;
    });

    $group->get('/mail_test', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_test.php';
        return $response;
    });

    $group->get('/mail_preview', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_preview.php';
        return $response;
    });

    $group->get('/mail_select_form', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_select_form.php';
        return $response;
    });

    $group->post('/mail_select_list', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_select_list.php';
        return $response;
    });

    $group->post('/mail_select_update', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_select_update.php';
        return $response;
    });

    $group->post('/mail_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/mail_delete.php';
        return $response;
    });

    $group->get('/visit_list', function (Request $request, Response $response, $args) {
        require_once '../adm/visit_list.php';
        return $response;
    });

    $group->get('/visit_search', function (Request $request, Response $response, $args) {
        require_once '../adm/visit_search.php';
        return $response;
    });

    $group->get('/visit_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/visit_delete.php';
        return $response;
    });

    $group->post('/visit_delete_update', function (Request $request, Response $response, $args) {
        require_once '../adm/visit_delete_update.php';
        return $response;
    });

    $group->get('/point_list', function (Request $request, Response $response, $args) {
        require_once '../adm/point_list.php';
        return $response;
    });

    $group->post('/point_list_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/point_list_delete.php';
        return $response;
    });

    $group->post('/point_update', function (Request $request, Response $response, $args) {
        require_once '../adm/point_update.php';
        return $response;
    });

    $group->get('/poll_list', function (Request $request, Response $response, $args) {
        require_once '../adm/poll_list.php';
        return $response;
    });

    $group->get('/poll_form', function (Request $request, Response $response, $args) {
        require_once '../adm/poll_form.php';
        return $response;
    });

    $group->post('/poll_form_update', function (Request $request, Response $response, $args) {
        require_once '../adm/poll_form_update.php';
        return $response;
    });

    $group->post('/poll_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/poll_delete.php';
        return $response;
    });

});