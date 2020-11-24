<?php
/**
 * NOTICIAS Y NOVEDADES
 */
Route::get('/noticia', 'NewsController@index')->name('news');
Route::get('/noticia-articulo/{id?}', 'NewsController@article')->name('article');
Route::post('/guardar-noticia', 'NewsController@store');
