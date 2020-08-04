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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'StartController@index')->name('start');
Route::get('/quienes-somos', 'AboutController@index')->name('about');
Route::get('/actividades-juegos', 'ActivitygameController@index')->name('activitygame');
Route::get('/test', 'TestController@index')->name('test');
Route::get('/nos-importas-tu', 'ImportyouController@index')->name('importyou');
Route::get('/tu-historia', 'HistoryController@index')->name('history');
Route::get('/noticias', 'NewsController@index')->name('news');
Route::apiResource('/pensamiento', 'PensamientoController');

//quienes somos
Route::get('/mision', 'AboutController@mission')->name('mission');
Route::get('/vision', 'AboutController@vision')->name('vision');
Route::get('/filosofia', 'AboutController@philosophy')->name('philosophy');
Route::get('/objetivos_institucionales', 'AboutController@institutionalObjectives')->name('institutionalObjectives');
Route::get('/organigrama', 'AboutController@organizationChart')->name('organizationChart');

Route::get('/construccion', 'AboutController@construction')->name('construction');
