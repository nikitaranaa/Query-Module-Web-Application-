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
//Route::get('/', function() {
 //    return view('welcome');
//});

//Route::view('userview','user');





  


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home-page', [App\Http\Controllers\FCS_Controller::class, 'index'])->name('home-page');
Route::post('get-data', [App\Http\Controllers\FCS_Controller::class, 'GetData'])->name('get-data');
Route::get('/get-sub-scheduled-industry', [App\Http\Controllers\FCS_Controller::class ,'GetSubScheduledIndustry'])->name('get-sub-scheduled-industry');
Route::get('/get-Get-Company-name', [App\Http\Controllers\FCS_Controller::class ,'GetCompanyname'])->name('get-Get-Company-name');
Route::get('/get-district', [App\Http\Controllers\FCS_Controller::class, 'Getdistrict'])->name('Get_district');