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

//quiz
Route::get('/quiz-nino', 'QuizController@nino');
Route::get('/quiz-nina', 'QuizController@nina');
Route::get('/lista-radios', 'QuizController@listaRadios');
Route::get('/lista-radios-nina', 'QuizController@listaRadiosNina');
Route::get('/lista-text', 'QuizController@listaText');
Route::get('/lista-text-nina', 'QuizController@listaTextNina');
Route::get('/lista-preguntas', 'QuizController@listaPreguntas');
Route::get('/lista-preguntas-nina', 'QuizController@listaPreguntasNina');
Route::get('/maximo', 'QuizController@maximo');
Route::get('/maximo-nina', 'QuizController@maximoNina');

Route::post('/enviar-respuestas', 'QuizController@resultados');

//roles
Route::get('/rol-uno', 'ActivitygameController@roluno')->name('roluno');



/*
 * Jovenes
 */
Route::get('/actividades-juegos-joven', 'ActivitygameController@FourPicsOneWord')->name('FourPicsOneWord');

Route::get('/hablemos-claro-joven', 'ActivitygameController@HablemosClaroIndex')->name('hablemosClaroIndex');
Route::get('/hablemosClaro', 'ActivitygameController@HablemosClaro')->name('hablemosClaro');
Route::get('/diversidad', 'ActivitygameController@diversidad')->name('diversidad');
Route::get('/que-es-lbt', 'ActivitygameController@lbt')->name('lbt');
Route::get('/autoconocimiento', 'ActivitygameController@autoconocimiento')->name('autoconocimiento');
Route::get('/afectividad', 'ActivitygameController@afectividad')->name('afectividad');
Route::get('/vida-salud', 'ActivitygameController@vidasalud')->name('vidasalud');
Route::get('/anticoncepcion-embarazo', 'ActivitygameController@embarazo')->name('embarazo');
Route::get('/its-riesgos', 'ActivitygameController@its')->name('its');


/*
 * Adultos
 */
Route::get('/actividades-adultos', 'AdultsController@index')->name('adults');
Route::get('/actividades-adultos/caso-uno', 'AdultsController@firstCase')->name('firstCase');

Route::get('/rol/{vue_capture?}', function () {
    return view('landingPage.actividadesjuegos.niños.roles.roluno',[]);
})->where('vue_capture', '[\/\w\.-]*');
