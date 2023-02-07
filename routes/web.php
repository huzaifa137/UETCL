<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master;
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


Route::get('/',[Master::class,'login'])->name('login');

        
Route::group(['middleware'=>'AuthCheck'],function (){

    Route::get('register',[Master::class,'register'])->name('register');
    });

    
    Route::post('admin.add',[Master::class,'Add_Admin'])->name('admin.add');
    Route::post('admin.login',[Master::class,'Admin_login'])->name('admin.login');