<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/adm[/]', function (Request $request, Response $response, $args) {
    require_once '../adm/index.php';
    return $response;
});

$app->get('/adm/config_form', function (Request $request, Response $response, $args) {
    require_once '../adm/config_form.php';
    return $response;
});

$app->get('/adm/auth_list', function (Request $request, Response $response, $args) {
    require_once '../adm/auth_list.php';
    return $response;
});

$app->post('/adm/auth_update', function (Request $request, Response $response, $args) {
    require_once '../adm/auth_update.php';
    return $response;
});

$app->post('/adm/config_form_update', function (Request $request, Response $response, $args) {
    require_once '../adm/config_form_update.php';
    return $response;
});

$app->get('/adm/theme', function (Request $request, Response $response, $args) {
    require_once '../adm/theme.php';
    return $response;
});

$app->post('/adm/theme_config_load', function (Request $request, Response $response, $args) {
    require_once '../adm/theme_config_load.php';
    return $response;
});

$app->get('/adm/theme_preview', function (Request $request, Response $response, $args) {
    require_once '../adm/theme_preview.php';
    return $response;
});

$app->post('/adm/theme_update', function (Request $request, Response $response, $args) {
    require_once '../adm/theme_update.php';
    return $response;
});

$app->post('/adm/theme_detail', function (Request $request, Response $response, $args) {
    require_once '../adm/theme_detail.php';
    return $response;
});

$app->get('/adm/menu_list', function (Request $request, Response $response, $args) {
    require_once '../adm/menu_list.php';
    return $response;
});

$app->get('/adm/menu_form', function (Request $request, Response $response, $args) {
    require_once '../adm/menu_form.php';
    return $response;
});

$app->map(['GET', 'POST'], '/adm/menu_form_search', function (Request $request, Response $response, $args) {
    require_once '../adm/menu_form_search.php';
    return $response;
});

$app->post('/adm/menu_list_update', function (Request $request, Response $response, $args) {
    require_once '../adm/menu_list_update.php';
    return $response;
});

// $app->get('/adm/sendmail_test', function (Request $request, Response $response, $args) {
//     require_once '../adm/sendmail_test.php';
//     return $response;
// });

// $app->post('/adm/sendmail_test', function (Request $request, Response $response, $args) {
//     require_once '../adm/sendmail_test.php';
//     return $response;
// });

$app->map(['GET', 'POST'], '/adm/sendmail_test', function (Request $request, Response $response, $args) {
    require_once '../adm/sendmail_test.php';
    return $response;
});

$app->get('/adm/newwinlist', function (Request $request, Response $response, $args) {
    require_once '../adm/newwinlist.php';
    return $response;
});

$app->get('/adm/newwinform', function (Request $request, Response $response, $args) {
    require_once '../adm/newwinform.php';
    return $response;
});

$app->post('/adm/newwinformupdate', function (Request $request, Response $response, $args) {
    require_once '../adm/newwinformupdate.php';
    return $response;
});

$app->get('/adm/session_file_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/session_file_delete.php';
    return $response;
});

$app->get('/adm/cache_file_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/cache_file_delete.php';
    return $response;
});

$app->get('/adm/thumbnail_file_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/thumbnail_file_delete.php';
    return $response;
});

$app->get('/adm/phpinfo', function (Request $request, Response $response, $args) {
    require_once '../adm/phpinfo.php';
    return $response;
});

$app->get('/adm/browscap', function (Request $request, Response $response, $args) {
    require_once '../adm/browscap.php';
    return $response;
});

$app->get('/adm/browscap_update', function (Request $request, Response $response, $args) {
    require_once '../adm/browscap_update.php';
    return $response;
});

$app->get('/adm/browscap_convert', function (Request $request, Response $response, $args) {
    require_once '../adm/browscap_convert.php';
    return $response;
});

$app->get('/adm/browscap_converter', function (Request $request, Response $response, $args) {
    require_once '../adm/browscap_converter.php';
    return $response;
});

$app->get('/adm/dbupgrade', function (Request $request, Response $response, $args) {
    require_once '../adm/dbupgrade.php';
    return $response;
});

$app->get('/adm/service', function (Request $request, Response $response, $args) {
    require_once '../adm/service.php';
    return $response;
});

$app->get('/adm/captcha_file_delete', function (Request $request, Response $response, $args) {
    require_once '../adm/captcha_file_delete.php';
    return $response;
});

$app->post('/adm/ajax.token', function (Request $request, Response $response, $args) {
    require_once '../adm/ajax.token.php';
    return $response;
});
