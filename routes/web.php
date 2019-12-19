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
/*** Routes fot excel file to upload ***/
Route::get('export', 'ExcelUpload_controller@export')->name('export');
Route::get('importExportView', 'ExcelUpload_controller@importExportView');
Route::post('import', 'ExcelUpload_controller@import')->name('import');

/*** Routes for singlePageApp ***/
Route::get('/{any}', 'SinglePageController@index')->where('any', '^(?!api).*$');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
