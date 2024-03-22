<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// /adm/ 경로 뒤에 / 가 붙을때 에러가 발생하는 경우를 방지
$app->get('/adm[/]', function (Request $request, Response $response, $args) {
    require_once '../adm/index.php';
    return $response;
});

$app->group('/adm', function ($group) {

    $group->get('/config_form', function (Request $request, Response $response, $args) {
        require_once '../adm/config_form.php';
        return $response;
    });

    $group->get('/auth_list', function (Request $request, Response $response, $args) {
        require_once '../adm/auth_list.php';
        return $response;
    });

    $group->post('/auth_update', function (Request $request, Response $response, $args) {
        require_once '../adm/auth_update.php';
        return $response;
    });

    $group->post('/config_form_update', function (Request $request, Response $response, $args) {
        require_once '../adm/config_form_update.php';
        return $response;
    });

    $group->get('/theme', function (Request $request, Response $response, $args) {
        require_once '../adm/theme.php';
        return $response;
    });

    $group->post('/theme_config_load', function (Request $request, Response $response, $args) {
        require_once '../adm/theme_config_load.php';
        return $response;
    });

    $group->get('/theme_preview', function (Request $request, Response $response, $args) {
        require_once '../adm/theme_preview.php';
        return $response;
    });

    $group->post('/theme_update', function (Request $request, Response $response, $args) {
        require_once '../adm/theme_update.php';
        return $response;
    });

    $group->post('/theme_detail', function (Request $request, Response $response, $args) {
        require_once '../adm/theme_detail.php';
        return $response;
    });

    $group->get('/menu_list', function (Request $request, Response $response, $args) {
        require_once '../adm/menu_list.php';
        return $response;
    });

    $group->get('/menu_form', function (Request $request, Response $response, $args) {
        require_once '../adm/menu_form.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/menu_form_search', function (Request $request, Response $response, $args) {
        require_once '../adm/menu_form_search.php';
        return $response;
    });

    $group->post('/menu_list_update', function (Request $request, Response $response, $args) {
        require_once '../adm/menu_list_update.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/sendmail_test', function (Request $request, Response $response, $args) {
        require_once '../adm/sendmail_test.php';
        return $response;
    });

    $group->get('/newwinlist', function (Request $request, Response $response, $args) {
        require_once '../adm/newwinlist.php';
        return $response;
    });

    $group->get('/newwinform', function (Request $request, Response $response, $args) {
        require_once '../adm/newwinform.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/newwinformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/newwinformupdate.php';
        return $response;
    });

    $group->get('/session_file_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/session_file_delete.php';
        return $response;
    });

    $group->get('/cache_file_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/cache_file_delete.php';
        return $response;
    });

    $group->get('/thumbnail_file_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/thumbnail_file_delete.php';
        return $response;
    });

    $group->get('/phpinfo', function (Request $request, Response $response, $args) {
        require_once '../adm/phpinfo.php';
        return $response;
    });

    $group->get('/browscap', function (Request $request, Response $response, $args) {
        require_once '../adm/browscap.php';
        return $response;
    });

    $group->get('/browscap_update', function (Request $request, Response $response, $args) {
        require_once '../adm/browscap_update.php';
        return $response;
    });

    $group->get('/browscap_convert', function (Request $request, Response $response, $args) {
        require_once '../adm/browscap_convert.php';
        return $response;
    });

    $group->get('/browscap_converter', function (Request $request, Response $response, $args) {
        require_once '../adm/browscap_converter.php';
        return $response;
    });

    $group->get('/dbupgrade', function (Request $request, Response $response, $args) {
        require_once '../adm/dbupgrade.php';
        return $response;
    });

    $group->get('/service', function (Request $request, Response $response, $args) {
        require_once '../adm/service.php';
        return $response;
    });

    $group->get('/captcha_file_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/captcha_file_delete.php';
        return $response;
    });

    $group->post('/ajax.token', function (Request $request, Response $response, $args) {
        require_once '../adm/ajax.token.php';
        return $response;
    });

});