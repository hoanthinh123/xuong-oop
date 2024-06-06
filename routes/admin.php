<?php
// CRUD bao gồm: Danh sách, thêm, sửa, xem, xóa
// User:
//      GET     -> USER/INDEX   -> INDEX    -> Danh sách
//      GET     -> USER/CREATE  -> CREATE   -> HIỂN THỊ FORM THÊM MỚI
//      POST    -> USER/STORE   -> STORE    -> LƯU DỮ LIỆU TỪ FORM THÊM MỚI VÀO DB
//      GET     -> USER/ID      -> SHOW ($id)     -> XEM CHI TIẾT
//      GET     -> USER/ID/EDIT -> EDIT ($id)     -> HIỂN THỊ FORM CẬP NHẬT
//      PUT     -> USER/ID      -> UPDATE ($id)   -> LƯU DỮ LIỆU TỪ FORM CẬP NHẬT VÀO DB
//      DELETE  -> USER/ID      -> DELETE ($id)   -> XÓA BẢ
use Asus\XuongOop\Controllers\Admin\DashboardController;
use Asus\XuongOop\Controllers\Admin\UserController;

$router->before('GET|POST', '/admin/*.*', function() {
    if (! isset($_SESSION['user'])) {
        header('location: ' . url('login') );
        exit();
    }
});
$router->mount('/admin', function () use ($router) {

    $router->get('/',               DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}/show',      UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',    UserController::class . '@delete');
    });
    
});