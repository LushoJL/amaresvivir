<?php
/**
 * ACTIVIDADES Y JUEGOS
 */
/*
 * Niños
 */
Route::get('/actividades-juegos', 'ActivitygameController@index')->name('activitygame');
Route::get('/actividades-juegos-niña', 'ActivitygameController@girl')->name('girl');
Route::get('/actividades-juegos-niño', 'ActivitygameController@boy')->name('boy');
Route::get('/semaforo', 'ActivitygameController@actividadDos')->name('actividaddos');
Route::get('/semaforo-rojo', 'ActivitygameController@actividadDosRojo');
Route::get('/semaforo-amarillo', 'ActivitygameController@actividadDosAmarillo');
Route::get('/semaforo-verde', 'ActivitygameController@actividadDosVerde');


/*
 * Jovenes
 */
Route::get('/actividades-juegos-joven', 'ActivitygameController@FourPicsOneWord')->name('FourPicsOneWord');

Route::get('/hablemos-claro-joven', 'ActivitygameController@HablemosClaroIndex')->name('hablemosClaroIndex');
Route::get('/hablemosClaro', 'ActivitygameController@HablemosClaro')->name('hablemosClaro');
Route::get('/diversidad', 'ActivitygameController@diversidad')->name('diversidad');


/*
 * Adultos
 */
Route::get('/actividades-adultos', 'AdultsController@index')->name('adults');
Route::get('/actividades-adultos/caso-uno', 'AdultsController@firstCase')->name('firstCase');
