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
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ThietbiController;
use App\Http\Controllers\DichvuController;
use App\Http\Controllers\CapsoController;
use App\Http\Controllers\BaocaoController;
// use App\Http\Controllers\LoguotController;

Route::resource('/login',UsersController::class);
Route::resource('/dashboard',DashboardController::class);
Route::resource('/thietbi',ThietbiController::class);
Route::resource('/dichvu',DichvuController::class);
Route::resource('/capso',CapsoController::class);
Route::resource('/baocao',BaocaoController::class);
// Route::post('/loguot',LoguotController::class);



Route::get('/', function () {
    return view('login.login');
});
