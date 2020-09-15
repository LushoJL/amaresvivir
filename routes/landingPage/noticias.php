<?php
/**
 * NOTICIAS Y NOVEDADES
 */
Route::get('/noticia', 'NewsController@index')->name('news');
Route::get('/noticia-articulo', 'NewsController@article')->name('article');
