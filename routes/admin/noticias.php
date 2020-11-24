<?php
/**
 * NOTICIAS Y NOVEDADES
 */
Route::get('/noticia-admin', 'NewsController@indexAdmin');

Route::get('/obtener-datos-noticia', 'NewsController@obtenerDatos');
Route::post('/borrar-noticia', 'NewsController@destroy');

