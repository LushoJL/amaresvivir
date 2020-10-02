<?php
/**
 * ACTIVIDADES Y JUEGOS
 */
Route::get('/actividades-juegos-admin', 'ActivitygameController@niñoAdmin');//NIÑOS
Route::post('/rojo', 'ActivitygameController@RecortarImagenenRojo');//NIÑOS
Route::post('/amarillo', 'ActivitygameController@RecortarImagenenAmarillo');//NIÑOS
Route::post('/verde', 'ActivitygameController@RecortarImagenenVerde');//NIÑOS
Route::get('/todoslosmensajesdelsemaforo', 'ActivitygameController@mensajesSemaforo');//NIÑOS
Route::post('/rol','ActivitygameController@rolPost');

Route::get('/actividades-juegos-joven-admin', 'ActivitygameController@jovenAdmin');//JOVENES
Route::get('/actividades-adultos-admin', 'ActivitygameController@adultoAdmin');//ADULTOS

Route::get('/actividades-preguntas-admin', 'QuestionController@index');
