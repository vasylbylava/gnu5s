<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('/shop', function ($group) {

    // shop/ 뒤에 / 가 붙어 에러가 발생하는 경우를 방지
    $group->get('[/]', function (Request $request, Response $response, $args) {
        require_once '../shop/index.php';
        return $response;
    });

    $group->get('/item', function (Request $request, Response $response, $args) {
        require_once '../shop/item.php';
        return $response;
    });

    $group->post('/cartupdate', function (Request $request, Response $response, $args) {
        require_once '../shop/cartupdate.php';
        return $response;
    });

    $group->get('/orderform', function (Request $request, Response $response, $args) {
        require_once '../shop/orderform.php';
        return $response;
    });

    $group->post('/ajax.orderstock', function (Request $request, Response $response, $args) {
        require_once '../shop/ajax.orderstock.php';
        return $response;
    });

    $group->post('/orderformupdate', function (Request $request, Response $response, $args) {
        require_once '../shop/orderformupdate.php';
        return $response;
    });

    $group->get('/orderinquiryview', function (Request $request, Response $response, $args) {
        require_once '../shop/orderinquiryview.php';
        return $response;
    });

    $group->post('/orderinquirycancel', function (Request $request, Response $response, $args) {
        require_once '../shop/orderinquirycancel.php';
        return $response;
    });

    $group->get('/list', function (Request $request, Response $response, $args) {
        require_once '../shop/list.php';
        return $response;
    });

    $group->get('/listtype', function (Request $request, Response $response, $args) {
        require_once '../shop/listtype.php';
        return $response;
    });

    $group->get('/coupon', function (Request $request, Response $response, $args) {
        require_once '../shop/coupon.php';
        return $response;
    });

    $group->get('/mypage', function (Request $request, Response $response, $args) {
        require_once '../shop/mypage.php';
        return $response;
    });

    $group->get('/price/naver', function (Request $request, Response $response, $args) {
        require_once '../shop/price/naver.php';
        return $response;
    });

    $group->get('/price/naver_summary', function (Request $request, Response $response, $args) {
        require_once '../shop/price/naver_summary.php';
        return $response;
    });

    $group->get('/price/google_feed', function (Request $request, Response $response, $args) {
        require_once '../shop/price/google_feed.php';
        return $response;
    });

    $group->get('/price/daum', function (Request $request, Response $response, $args) {
        require_once '../shop/price/daum.php';
        return $response;
    });

    $group->get('/price/daum_summary', function (Request $request, Response $response, $args) {
        require_once '../shop/price/daum_summary.php';
        return $response;
    });

    $group->get('/personalpay', function (Request $request, Response $response, $args) {
        require_once '../shop/personalpay.php';
        return $response;
    });
    
    $group->get('/itemuselist', function (Request $request, Response $response, $args) {
        require_once '../shop/itemuselist.php';
        return $response;
    });
    
    $group->get('/itemqalist', function (Request $request, Response $response, $args) {
        require_once '../shop/itemqalist.php';
        return $response;
    });
    
    $group->get('/couponzone', function (Request $request, Response $response, $args) {
        require_once '../shop/couponzone.php';
        return $response;
    });
    
    $group->get('/ajax.coupondownload', function (Request $request, Response $response, $args) {
        require_once '../shop/ajax.coupondownload.php';
        return $response;
    });
    
    $group->get('/cart', function (Request $request, Response $response, $args) {
        require_once '../shop/cart.php';
        return $response;
    });
    
    $group->get('/search', function (Request $request, Response $response, $args) {
        require_once '../shop/search.php';
        return $response;
    });
    
    $group->get('/largeimage', function (Request $request, Response $response, $args) {
        require_once '../shop/largeimage.php';
        return $response;
    });
    
    $group->get('/event', function (Request $request, Response $response, $args) {
        require_once '../shop/event.php';
        return $response;
    });
    
    $group->map(['GET', 'POST'], '/ajax.action', function (Request $request, Response $response, $args) {
        require_once '../shop/ajax.action.php';
        return $response;
    });
    
    $group->get('/orderinquiry', function (Request $request, Response $response, $args) {
        require_once '../shop/orderinquiry.php';
        return $response;
    });
    
    $group->post('/orderitemcoupon', function (Request $request, Response $response, $args) {
        require_once '../shop/orderitemcoupon.php';
        return $response;
    });
    
    $group->post('/cartoption', function (Request $request, Response $response, $args) {
        require_once '../shop/cartoption.php';
        return $response;
    });
    
    $group->post('/ordersendcost', function (Request $request, Response $response, $args) {
        require_once '../shop/ordersendcost.php';
        return $response;
    });
    
    $group->post('/ordersendcostcoupon', function (Request $request, Response $response, $args) {
        require_once '../shop/ordersendcostcoupon.php';
        return $response;
    });
    
});