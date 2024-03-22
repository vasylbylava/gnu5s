<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('/adm', function ($group) {
    
    $group->get('/board_list', function (Request $request, Response $response, $args) {
        require_once '../adm/board_list.php';
        return $response;
    });

    $group->get('/board_form', function (Request $request, Response $response, $args) {
        require_once '../adm/board_form.php';
        return $response;
    });

    $group->post('/board_form_update', function (Request $request, Response $response, $args) {
        require_once '../adm/board_form_update.php';
        return $response;
    });

    $group->post('/board_list_update', function (Request $request, Response $response, $args) {
        require_once '../adm/board_list_update.php';
        return $response;
    });

    $group->post('/board_list_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/board_list_delete.php';
        return $response;
    });

    $group->get('/board_copy', function (Request $request, Response $response, $args) {
        require_once '../adm/board_copy.php';
        return $response;
    });

    $group->post('/board_copy_update', function (Request $request, Response $response, $args) {
        require_once '../adm/board_copy_update.php';
        return $response;
    });

    $group->get('/board_thumbnail_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/board_thumbnail_delete.php';
        return $response;
    });

    $group->get('/boardgroup_list', function (Request $request, Response $response, $args) {
        require_once '../adm/boardgroup_list.php';
        return $response;
    });

    $group->get('/boardgroup_form', function (Request $request, Response $response, $args) {
        require_once '../adm/boardgroup_form.php';
        return $response;
    });

    $group->post('/boardgroup_form_update', function (Request $request, Response $response, $args) {
        require_once '../adm/boardgroup_form_update.php';
        return $response;
    });

    $group->post('/boardgroup_list_update', function (Request $request, Response $response, $args) {
        require_once '../adm/boardgroup_list_update.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/popular_list', function (Request $request, Response $response, $args) {
        require_once '../adm/popular_list.php';
        return $response;
    });

    $group->get('/popular_rank', function (Request $request, Response $response, $args) {
        require_once '../adm/popular_rank.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/qa_config', function (Request $request, Response $response, $args) {
        require_once '../adm/qa_config.php';
        return $response;
    });

    $group->post('/qa_config_update', function (Request $request, Response $response, $args) {
        require_once '../adm/qa_config_update.php';
        return $response;
    });

    $group->get('/contentlist', function (Request $request, Response $response, $args) {
        require_once '../adm/contentlist.php';
        return $response;
    });

    $group->get('/contentform', function (Request $request, Response $response, $args) {
        require_once '../adm/contentform.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/contentformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/contentformupdate.php';
        return $response;
    });

    $group->post('/ajax_use_captcha', function (Request $request, Response $response, $args) {
        require_once '../adm/ajax_use_captcha.php';
        return $response;
    });

    $group->get('/faqmasterlist', function (Request $request, Response $response, $args) {
        require_once '../adm/faqmasterlist.php';
        return $response;
    });

    $group->get('/faqmasterform', function (Request $request, Response $response, $args) {
        require_once '../adm/faqmasterform.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/faqmasterformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/faqmasterformupdate.php';
        return $response;
    });

    $group->get('/faqlist', function (Request $request, Response $response, $args) {
        require_once '../adm/faqlist.php';
        return $response;
    });

    $group->get('/faqform', function (Request $request, Response $response, $args) {
        require_once '../adm/faqform.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/faqformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/faqformupdate.php';
        return $response;
    });

    $group->get('/write_count', function (Request $request, Response $response, $args) {
        require_once '../adm/write_count.php';
        return $response;
    });

});    