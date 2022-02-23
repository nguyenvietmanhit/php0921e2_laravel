<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
// Khai báo các URL cho ứng dụng
// Route có 1 số method chính là get, post, put, delete -> RESTFUL API
//Route hiển thị form thêm mới sp
//http://localhost/laravel_demo/public/them-moi-sp
Route::get('them-moi-sp', [ProductController::class, 'create']);
// Route insert vào db
Route::post('luu-sp', [ProductController::class, 'store']);

// Danh sách sp
Route::get('danh-sach-sp', [ProductController::class, 'index']);

// Route sửa sp
Route::get('sua-sp/{product_id}', [ProductController::class, 'edit']);
