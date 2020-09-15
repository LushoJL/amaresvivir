<?php
/**
 * ACTIVIDADES Y JUEGOS
 */
Route::get('/actividades-juegos-admin', 'ActivitygameController@niñoAdmin');//NIÑOS
Route::get('/actividades-juegos-joven-admin', 'ActivitygameController@jovenAdmin');//JOVENES
Route::get('/actividades-adultos-admin', 'ActivitygameController@adultoAdmin');//ADULTOS

