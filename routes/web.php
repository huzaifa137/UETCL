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




        
    Route::group(['middleware'=>'AuthCheck'],function (){
        Route::get('/',[Master::class,'login'])->name('login');
        Route::get('register',[Master::class,'register'])->name('register');
        Route::get('dashboard',[Master::class,'dashboard'])->name('dashboard');
    });
    

    Route::post('admin.add',[Master::class,'Add_Admin'])->name('admin.add');
    Route::post('admin.login',[Master::class,'Admin_login'])->name('admin.login');

    Route::get('auth.logout',[Master::class,'logout'])->name('auth.logout');
    
    
    Route::view('AddBook','Adminpages.AddBook')->name('AddBook');
    Route::view('EditBook','Adminpages.EditBook')->name('EditBook');
    
    Route::view('BookDetails','Adminpages.BookDetails')->name('BookDetails');
    Route::get('delete/{id}',[BookController::class,'delete']);
    Route::get('Edit/{id}',[BookController::class,'updateRecord']);
    Route::get('AllBooks',[BookController::class,'show'])->name('AllBooks');
    Route::get('contact-info',[BookController::class,'contact_info'])->name('contact-info');