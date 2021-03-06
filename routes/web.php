<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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
    return view('index');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::post('/upload-files', 'HomeController@uploadFiles')->name('upload-files');
Route::post('/store','HomeController@store')->name('store');
Route::get('/download/{file_name}','HomeController@download')->name('download');
Route::get('/reset','HomeController@reset')->name('reset');
