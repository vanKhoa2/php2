<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/app/helpers/handier.php";
$url = $_GET['url'] ?? '';

use App\Controllers\HomeController;
use App\Controllers\LienHeController;
use App\Controllers\DetailController;
use App\Controllers\GioiThieuController;
use App\Controllers\DangKyController;
use App\Controllers\DangNhapController;

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/',[HomeController::class,'index'] );
$router->get('/lienhe',[LienHeController::class,'index'] );
$router->get('/detail',[DetailController::class,'index'] );
$router->get('/gioithieu',[GioiThieuController::class,'index'] );
$router->get('/dangky',[DangKyController::class,'index'] );
$router->get('/dangnhap',[DangNhapController::class,'index'] );
$router->get('/test',[HomeController::class,'test'] );



// $router->get('/about', function () {
//     return "ABOUT US";
// });
// $router->get("/detail/{id}", function ($id) {
//     return "Post Detail is $id";
// });

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;