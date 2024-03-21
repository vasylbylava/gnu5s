<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/bbs/login', function (Request $request, Response $response, $args) {
    require_once '../bbs/login.php';
    return $response;
});

$app->post('/bbs/login_check', function (Request $request, Response $response, $args) {
    require_once '../bbs/login_check.php';
    return $response;
});

$app->get('/bbs/logout', function (Request $request, Response $response, $args) {
    require_once '../bbs/logout.php';
    return $response;
});

$app->get('/bbs/member_confirm', function (Request $request, Response $response, $args) {
    require_once '../bbs/member_confirm.php';
    return $response;
});

$app->map(['GET', 'POST'], '/bbs/register_form', function (Request $request, Response $response, $args) {
    require_once '../bbs/register_form.php';
    return $response;
});

$app->post('/bbs/register_form_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/register_form_update.php';
    return $response;
});

$app->get('/bbs/point', function (Request $request, Response $response, $args) {
    require_once '../bbs/point.php';
    return $response;
});

$app->get('/bbs/memo', function (Request $request, Response $response, $args) {
    require_once '../bbs/memo.php';
    return $response;
});

$app->get('/bbs/memo_form', function (Request $request, Response $response, $args) {
    require_once '../bbs/memo_form.php';
    return $response;
});

$app->post('/bbs/memo_form_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/memo_form_update.php';
    return $response;
});

$app->get('/bbs/memo_view', function (Request $request, Response $response, $args) {
    require_once '../bbs/memo_view.php';
    return $response;
});

$app->get('/bbs/memo_delete', function (Request $request, Response $response, $args) {
    require_once '../bbs/memo_delete.php';
    return $response;
});

$app->get('/bbs/scrap', function (Request $request, Response $response, $args) {
    require_once '../bbs/scrap.php';
    return $response;
});

$app->get('/bbs/board', function (Request $request, Response $response, $args) {
    require_once '../bbs/board.php';
    return $response;
});

$app->get('/bbs/write', function (Request $request, Response $response, $args) {
    require_once '../bbs/write.php';
    return $response;
});

$app->post('/bbs/write_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/write_update.php';
    return $response;
});

$app->post('/bbs/write_token', function (Request $request, Response $response, $args) {
    require_once '../bbs/write_token.php';
    return $response;
});

$app->post('/bbs/write_comment_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/write_comment_update.php';
    return $response;
});

$app->post('/bbs/ajax.filter', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.filter';
    return $response;
});

$app->get('/bbs/ajax.comment_token', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.comment_token.php';
    return $response;
});

$app->post('/bbs/board_list_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/board_list_update.php';
    return $response;
});

$app->post('/bbs/move', function (Request $request, Response $response, $args) {
    require_once '../bbs/move.php';
    return $response;
});

$app->post('/bbs/move_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/move_update.php';
    return $response;
});

$app->get('/bbs/link', function (Request $request, Response $response, $args) {
    require_once '../bbs/link.php';
    return $response;
});

$app->get('/bbs/download', function (Request $request, Response $response, $args) {
    require_once '../bbs/download.php';
    return $response;
});

$app->get('/bbs/register', function (Request $request, Response $response, $args) {
    require_once '../bbs/register.php';
    return $response;
});

$app->post('/bbs/ajax.mb_id', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.mb_id.php';
    return $response;
});

$app->post('/bbs/ajax.mb_recommend', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.mb_recommend.php';
    return $response;
});

$app->post('/bbs/ajax.mb_nick', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.mb_nick.php';
    return $response;
});

$app->post('/bbs/ajax.mb_email', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.mb_email.php';
    return $response;
});

$app->post('/bbs/ajax.mb_hp', function (Request $request, Response $response, $args) {
    require_once '../bbs/ajax.mb_hp.php';
    return $response;
});

$app->map(['GET', 'POST'], '/bbs/register_result', function (Request $request, Response $response, $args) {
    require_once '../bbs/register_result.php';
    return $response;
});

$app->post('/bbs/good', function (Request $request, Response $response, $args) {
    require_once '../bbs/good.php';
    return $response;
});

$app->get('/bbs/scrap_popin', function (Request $request, Response $response, $args) {
    require_once '../bbs/scrap_popin.php';
    return $response;
});

$app->post('/bbs/scrap_popin_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/scrap_popin_update.php';
    return $response;
});

$app->get('/bbs/password_lost', function (Request $request, Response $response, $args) {
    require_once '../bbs/password_lost.php';
    return $response;
});

$app->post('/bbs/password_lost2', function (Request $request, Response $response, $args) {
    require_once '../bbs/password_lost2.php';
    return $response;
});

$app->get('/bbs/faq', function (Request $request, Response $response, $args) {
    require_once '../bbs/faq.php';
    return $response;
});

$app->get('/bbs/qalist', function (Request $request, Response $response, $args) {
    require_once '../bbs/qalist.php';
    return $response;
});

$app->get('/bbs/qaview', function (Request $request, Response $response, $args) {
    require_once '../bbs/qaview.php';
    return $response;
});

$app->get('/bbs/qawrite', function (Request $request, Response $response, $args) {
    require_once '../bbs/qawrite.php';
    return $response;
});

$app->post('/bbs/qawrite_update', function (Request $request, Response $response, $args) {
    require_once '../bbs/qawrite_update.php';
    return $response;
});

$app->get('/bbs/qadelete', function (Request $request, Response $response, $args) {
    require_once '../bbs/qadelete.php';
    return $response;
});

$app->get('/bbs/new', function (Request $request, Response $response, $args) {
    require_once '../bbs/new.php';
    return $response;
});

$app->post('/bbs/new_delete', function (Request $request, Response $response, $args) {
    require_once '../bbs/new_delete.php';
    return $response;
});

$app->get('/bbs/current_connect', function (Request $request, Response $response, $args) {
    require_once '../bbs/current_connect.php';
    return $response;
});

$app->get('/bbs/search', function (Request $request, Response $response, $args) {
    require_once '../bbs/search.php';
    return $response;
});

$app->get('/bbs/group', function (Request $request, Response $response, $args) {
    require_once '../bbs/group.php';
    return $response;
});

$app->get('/bbs/content', function (Request $request, Response $response, $args) {
    require_once '../bbs/content.php';
    return $response;
});
