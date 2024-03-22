<?php
if (!(defined('G5_ROUTER') && G5_ROUTER)) exit;
    
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('/adm/shop_admin', function ($group) {
    
    $group->get('[/]', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/index.php';
        return $response;
    });

    $group->get('/configform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/configform.php';
        return $response;
    });

    $group->post('/configformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/configformupdate.php';
        return $response;
    });

    $group->get('/orderlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderlist.php';
        return $response;
    });

    $group->get('/personalpaylist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/personalpaylist.php';
        return $response;
    });

    $group->get('/categorylist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/categorylist.php';
        return $response;
    });

    $group->post('/categorylistupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/categorylistupdate.php';
        return $response;
    });

    $group->get('/categoryform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/categoryform.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/categoryformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/categoryformupdate.php';
        return $response;
    });

    $group->get('/itemlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemlist.php';
        return $response;
    });

    $group->get('/itemform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemform.php';
        return $response;
    });

    $group->post('/itemformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemformupdate.php';
        return $response;
    });
    
    $group->map(['GET', 'POST'], '/itemlistupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemlistupdate.php';
        return $response;
    });

    $group->get('/itemexcel', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemexcel.php';
        return $response;
    });

    $group->post('/itemexcelupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemexcelupdate.php';
        return $response;
    });

    $group->get('/itemqalist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemqalist.php';
        return $response;
    });

    $group->get('/itemuselist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemuselist.php';
        return $response;
    });

    $group->get('/itemstocklist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemstocklist.php';
        return $response;
    });

    $group->post('/itemstocklistupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemstocklistupdate.php';
        return $response;
    });

    $group->get('/optionstocklist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/optionstocklist.php';
        return $response;
    });

    $group->get('/itemsellrank', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemsellrank.php';
        return $response;
    });

    $group->get('/itemtypelist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemtypelist.php';
        return $response;
    });

    $group->post('/itemtypelistupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemtypelistupdate.php';
        return $response;
    });

    $group->get('/couponlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponlist.php';
        return $response;
    });

    $group->post('/couponlist_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponlist_delete.php';
        return $response;
    });

    $group->get('/couponform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponform.php';
        return $response;
    });

    $group->post('/couponformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponformupdate.php';
        return $response;
    });

    $group->get('/coupontarget', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/coupontarget.php';
        return $response;
    });

    $group->get('/couponmember', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponmember.php';
        return $response;
    });

    $group->get('/couponzonelist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponzonelist.php';
        return $response;
    });

    $group->get('/couponzoneform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponzoneform.php';
        return $response;
    });

    $group->post('/couponzoneformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponzoneformupdate.php';
        return $response;
    });

    $group->post('/couponzonelist_delete', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/couponzonelist_delete.php';
        return $response;
    });

    $group->get('/sendcostlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sendcostlist.php';
        return $response;
    });
    
    $group->post('/sendcostupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sendcostupdate.php';
        return $response;
    });

    $group->get('/inorderlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/inorderlist.php';
        return $response;
    });

    $group->post('/inorderlistdelete', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/inorderlistdelete.php';
        return $response;
    });

    $group->get('/sale1', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sale1.php';
        return $response;
    });

    $group->get('/sale1today', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sale1today.php';
        return $response;
    });

    $group->get('/sale1date', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sale1date.php';
        return $response;
    });

    $group->get('/sale1month', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sale1month.php';
        return $response;
    });

    $group->get('/sale1year', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/sale1year.php';
        return $response;
    });

    $group->get('/orderprint', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderprint.php';
        return $response;
    });

    $group->get('/orderprintresult', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderprintresult.php';
        return $response;
    });

    $group->get('/itemstocksms', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemstocksms.php';
        return $response;
    });

    $group->post('/itemstocksmsupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemstocksmsupdate.php';
        return $response;
    });

    $group->get('/itemevent', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemevent.php';
        return $response;
    });

    $group->get('/itemeventform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemeventform.php';
        return $response;
    });
    
    $group->map(['GET', 'POST'], '/itemeventformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemeventformupdate.php';
        return $response;
    });

    $group->get('/itemeventlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemeventlist.php';
        return $response;
    });

    $group->post('/itemeventlistupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/itemeventlistupdate.php';
        return $response;
    });

    $group->get('/bannerlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/bannerlist.php';
        return $response;
    });

    $group->get('/bannerform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/bannerform.php';
        return $response;
    });

    $group->map(['GET', 'POST'], '/bannerformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/bannerformupdate.php';
        return $response;
    });

    $group->get('/wishlist', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/wishlist.php';
        return $response;
    });    

    $group->get('/price', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/price.php';
        return $response;
    });    

    $group->get('/orderform', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderform.php';
        return $response;
    });    

    $group->post('/orderformcartupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderformcartupdate.php';
        return $response;
    });    

    $group->post('/orderformreceiptupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderformreceiptupdate.php';
        return $response;
    });    

    $group->post('/orderformupdate', function (Request $request, Response $response, $args) {
        require_once '../adm/shop_admin/orderformupdate.php';
        return $response;
    });    
    
});
