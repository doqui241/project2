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
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DichvuController;
use App\Http\Controllers\CapsoController;
use App\Http\Controllers\BaocaoController;
use App\Http\Controllers\QuanlyuserController;
use App\Http\Controllers\NhatkyController;
use App\Http\Controllers\RoleController;
// use App\Http\Controllers\LoguotController;

Route::resource('/login',UsersController::class);
Route::resource('/Dashboard',DashboardController::class);
Route::resource('/thietbi',DeviceController::class);
Route::resource('/dichvu',DichvuController::class);
Route::resource('/capso',CapsoController::class);
Route::resource('/baocao',BaocaoController::class);
Route::resource('/quanlyuser',QuanlyuserController::class);
Route::resource('/nhatky',NhatkyController::class);
Route::resource('/role',RoleController::class);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return redirect()->route('Dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
