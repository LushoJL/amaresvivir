<?php
/**
 * ACTIVIDADES Y JUEGOS
 */
Route::get('/actividades-juegos', 'ActivitygameController@index')->name('activitygame');//NIÑOS
Route::get('/actividades-juegos-niña', 'ActivitygameController@girl')->name('girl');//NIÑOS
Route::get('/actividades-juegos-niño', 'ActivitygameController@boy')->name('boy');//NIÑOS
Route::get('/semaforo', 'ActivitygameController@actividadDos')->name('actividaddos');//NIÑOS
Route::get('/actividades-juegos-joven', 'ActivitygameController@FourPicsOneWord')->name('FourPicsOneWord');//JOVENES
Route::get('/actividades-adultos', 'AdultsController@index')->name('adults');//ADULTOS
Route::get('/actividades-adultos/caso-uno', 'AdultsController@firstCase')->name('firstCase');//ADULTOS
