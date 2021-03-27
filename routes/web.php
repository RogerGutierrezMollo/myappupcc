<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/producto', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/list/producto', [ProductoController::class, 'index']);
Route::get('/template', function () {
    return view('template/index');

Route::resource('producto', ProductoController::class){
});