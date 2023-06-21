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
        Route::get('AllRecords',[Master::class,'case_records'])->name('AllBooks');
        Route::get('AllOfficers',[Master::class,'officer_records'])->name('AllOfficers');
        Route::get('delete/{id}',[Master::class,'delete']);
        Route::get('deleteOfficer/{id}',[Master::class,'delete_officer']);
        Route::get('Edit/{id}',[Master::class,'updateRecord']);
        Route::get('EditOfficer/{id}',[Master::class,'update_Officer_Record']);
        Route::get('details/{id}',[Master::class,'details1'])->name('case.details');
        Route::get('auth.logout',[Master::class,'logout'])->name('auth.logout');
        Route::get('AddRecord',[Master::class,'AddRecord'])->name('AddBook');
        Route::get('Pending',[Master::class,'Pending_records'])->name('pending');
        Route::get('status/{id}',[Master::class,'Update_case_status']);
        Route::get('cases.status',[Master::class,'court_case_status'])->name('cases.status');
        Route::view('EditBook','Adminpages.EditBook')->name('EditBook');
        Route::view('AddOfficer','Adminpages.AddOfficer')->name('AddOfficer');
        Route::get('details',[Master::class,'details']);
        
    });
    Route::get('General-records',[Master::class,'general_records'])->name('General-records');
    Route::get('officer-records',[Master::class,'officerReportrecords'])->name('officer-records');
    Route::get('case-in-courts',[Master::class,'case_in_courts'])->name('case-in-courts');
    Route::get('year-case-report',[Master::class,'year_case_report'])->name('year-case-report');
    Route::get('pdf-generator',[Master::class,'generator'])->name('pdf-generator');
    Route::get('individual-generator/{id}',[Master::class,'IndividualGenerator'])->name('individual-generator/{id}');
    Route::get('year-generator/{id}',[Master::class,'year_report_download'])->name('year-generator/{id}');
    Route::get('officer-generator',[Master::class,'officer_report_download'])->name('officer-generator');
    
    Route::post('admin.add',[Master::class,'Add_Admin'])->name('admin.add');
    Route::post('admin.login',[Master::class,'Admin_login'])->name('admin.login');
    Route::post('add.record',[Master::class,'Add_Record'])->name('add.record');
    Route::post('update.record',[Master::class,'update'])->name('update.record');
    Route::post('add.officer',[Master::class,'Add_officer'])->name('add.officer');
    Route::post('update.officer',[Master::class,'update_officer'])->name('update.officer');
    Route::post('update.status',[Master::class,'update_status'])->name('update.status');
    Route::post('custom-search',[Master::class,'custom_year_search'])->name('custom-search');
      