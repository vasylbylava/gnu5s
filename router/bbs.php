<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('/bbs', function ($group) {

    $group->get('/login', function (Request $request, Response $response, $args) {
        require_once '../bbs/login.php';
        return $response;
    });

    $group->post('/login_check', function (Request $request, Response $response, $args) {
        require_once '../bbs/login_check.php';
        return $response;
    });

    $group->get('/logout', function (Request $request, Response $response, $args) {
        require_once '../bbs/logout.php';
        return $response;
    });

    $group->get('/member_confirm', function (Request $request, Response $response, $args) {
        require_once '../bbs/member_confirm.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/register_form', function (Request $request, Response $response, $args) {
        require_once '../bbs/register_form.php';
        return $response;
    });

    $group->post('/register_form_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/register_form_update.php';
        return $response;
    });

    $group->get('/point', function (Request $request, Response $response, $args) {
        require_once '../bbs/point.php';
        return $response;
    });

    $group->get('/memo', function (Request $request, Response $response, $args) {
        require_once '../bbs/memo.php';
        return $response;
    });

    $group->get('/memo_form', function (Request $request, Response $response, $args) {
        require_once '../bbs/memo_form.php';
        return $response;
    });

    $group->post('/memo_form_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/memo_form_update.php';
        return $response;
    });

    $group->get('/memo_view', function (Request $request, Response $response, $args) {
        require_once '../bbs/memo_view.php';
        return $response;
    });

    $group->get('/memo_delete', function (Request $request, Response $response, $args) {
        require_once '../bbs/memo_delete.php';
        return $response;
    });

    $group->get('/scrap', function (Request $request, Response $response, $args) {
        require_once '../bbs/scrap.php';
        return $response;
    });

    $group->get('/scrap_delete', function (Request $request, Response $response, $args) {
        require_once '../bbs/scrap_delete.php';
        return $response;
    });

    $group->get('/board', function (Request $request, Response $response, $args) {
        require_once '../bbs/board.php';
        return $response;
    });

    $group->get('/write', function (Request $request, Response $response, $args) {
        require_once '../bbs/write.php';
        return $response;
    });

    $group->post('/write_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/write_update.php';
        return $response;
    });

    $group->post('/write_token', function (Request $request, Response $response, $args) {
        require_once '../bbs/write_token.php';
        return $response;
    });

    $group->post('/write_comment_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/write_comment_update.php';
        return $response;
    });

    $group->post('/ajax.filter', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.filter';
        return $response;
    });

    $group->get('/ajax.comment_token', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.comment_token.php';
        return $response;
    });

    $group->post('/board_list_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/board_list_update.php';
        return $response;
    });

    $group->post('/move', function (Request $request, Response $response, $args) {
        require_once '../bbs/move.php';
        return $response;
    });

    $group->post('/move_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/move_update.php';
        return $response;
    });

    $group->get('/link', function (Request $request, Response $response, $args) {
        require_once '../bbs/link.php';
        return $response;
    });

    $group->get('/download', function (Request $request, Response $response, $args) {
        require_once '../bbs/download.php';
        return $response;
    });

    $group->get('/register', function (Request $request, Response $response, $args) {
        require_once '../bbs/register.php';
        return $response;
    });

    $group->post('/ajax.mb_id', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.mb_id.php';
        return $response;
    });

    $group->post('/ajax.mb_recommend', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.mb_recommend.php';
        return $response;
    });

    $group->post('/ajax.mb_nick', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.mb_nick.php';
        return $response;
    });

    $group->post('/ajax.mb_email', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.mb_email.php';
        return $response;
    });

    $group->post('/ajax.mb_hp', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.mb_hp.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/register_result', function (Request $request, Response $response, $args) {
        require_once '../bbs/register_result.php';
        return $response;
    });

    $group->post('/good', function (Request $request, Response $response, $args) {
        require_once '../bbs/good.php';
        return $response;
    });

    $group->get('/scrap_popin', function (Request $request, Response $response, $args) {
        require_once '../bbs/scrap_popin.php';
        return $response;
    });

    $group->post('/scrap_popin_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/scrap_popin_update.php';
        return $response;
    });

    $group->get('/password_lost', function (Request $request, Response $response, $args) {
        require_once '../bbs/password_lost.php';
        return $response;
    });

    $group->post('/password_lost2', function (Request $request, Response $response, $args) {
        require_once '../bbs/password_lost2.php';
        return $response;
    });

    $group->get('/faq', function (Request $request, Response $response, $args) {
        require_once '../bbs/faq.php';
        return $response;
    });

    $group->get('/qalist', function (Request $request, Response $response, $args) {
        require_once '../bbs/qalist.php';
        return $response;
    });

    $group->get('/qaview', function (Request $request, Response $response, $args) {
        require_once '../bbs/qaview.php';
        return $response;
    });

    $group->get('/qawrite', function (Request $request, Response $response, $args) {
        require_once '../bbs/qawrite.php';
        return $response;
    });

    $group->post('/qawrite_update', function (Request $request, Response $response, $args) {
        require_once '../bbs/qawrite_update.php';
        return $response;
    });

    $group->get('/qadelete', function (Request $request, Response $response, $args) {
        require_once '../bbs/qadelete.php';
        return $response;
    });

    $group->get('/new', function (Request $request, Response $response, $args) {
        require_once '../bbs/new.php';
        return $response;
    });

    $group->post('/new_delete', function (Request $request, Response $response, $args) {
        require_once '../bbs/new_delete.php';
        return $response;
    });

    $group->get('/current_connect', function (Request $request, Response $response, $args) {
        require_once '../bbs/current_connect.php';
        return $response;
    });

    $group->get('/search', function (Request $request, Response $response, $args) {
        require_once '../bbs/search.php';
        return $response;
    });

    $group->get('/group', function (Request $request, Response $response, $args) {
        require_once '../bbs/group.php';
        return $response;
    });

    $group->get('/content', function (Request $request, Response $response, $args) {
        require_once '../bbs/content.php';
        return $response;
    });

    $group->post('/ajax.autosave', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.autosave.php';
        return $response;
    });

    $group->get('/ajax.autosavelist', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.autosavelist.php';
        return $response;
    });

    $group->get('/ajax.autosaveload', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.autosaveload.php';
        return $response;
    });

    $group->get('/ajax.autosavedel', function (Request $request, Response $response, $args) {
        require_once '../bbs/ajax.autosavedel.php';
        return $response;
    });

});