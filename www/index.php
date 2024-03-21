<?php
define('G5_ROUTER', true);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require '../vendor/autoload.php';

// 404 Not Found Handler
$customNotFoundHandler = function ($request, $handler) {
    $response = new \Slim\Psr7\Response();
    $response->getBody()->write('404 Not Found');
    return $response->withStatus(404);
};

$app = AppFactory::create();

// // 미들웨어 정의
// $middleware = function ($request, $handler) {
//     $request = $request->withAttribute('ggg', 'value');
//     return $handler->handle($request);
// };

// // 미들웨어를 애플리케이션에 추가
// $app->add($middleware);

// Add Error Middleware
$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$errorMiddleware->setErrorHandler(\Slim\Exception\HttpNotFoundException::class, $customNotFoundHandler);

$app->get('/', function (Request $request, Response $response, $args) {
    // $response->getBody()->write("Hello world!");
    require_once '../index.php';
    return $response;
});

// router 디렉토리의 라우터 파일을 읽어들임
// 하나의 엔드포인트, 예를 들어 /adm (관리자경로)는 중복 선언될 수 없기 때문에 SORT 할 필요가 없음
$router_files = glob('../router/*.php', GLOB_NOSORT);
foreach ($router_files as $file) {
    require_once($file);
}

$app->run();
