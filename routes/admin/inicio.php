<?php
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/index', 'AdminController@index')->name('index');
Route::post('/picture', 'AdminController@storage');
Route::get('/llamarImagenesCarrusel', 'AdminController@getData');
Route::post('/eliminarImagenesCarrusel', 'AdminController@postData');

});
