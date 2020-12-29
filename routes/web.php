<?php

use RealRashid\SweetAlert\Facades\Alert;

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
//Frontend
/*Route::get('/', function () {
    return view('covid');
});*/

Route::get('/', 'FrontendController@index');

Auth::routes();

//Backend
Route::get('/home', 'FrontendController@index')->name('home');

Route::resource('kkr', 'KkrController');
Route::get('/delete/{id}', 'KkrController@delete');

Route::resource('krk', 'KrkController');

Route::resource('krkmenara', 'KrkmenaraController');

Route::resource('krkreklame', 'KrkreklameController');

Route::resource('rekomdptr', 'RekomdptrController');

Route::resource('rekomtambang', 'RekomtambangController');

Route::resource('rekomtkprd', 'RekomtkprdController');

Route::resource('test', 'TestController');

//Project GIS covid
Route::resource('gis', 'CovidController');