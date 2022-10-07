<?php
use App\Http\Controllers\NhanvienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
//Danh mục Nhân Viên

 Route::get('/',[NhanvienController::class,'nhanvien'])
 ->name('nhanvien');
 
 Route::get('them_nhanvien',[NhanvienController::class,'them_nv'])
 ->name('them_nv');
 Route::post('/luunhanvien',[NhanvienController::class,'luu_nv'])
 ->name('luu_nv');

