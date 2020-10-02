<?php
/**
 * ACTIVIDADES Y JUEGOS
 */
Route::get('/actividades-juegos-admin', 'ActivitygameController@niñoAdmin');//NIÑOS
Route::post('/rojo', 'ActivitygameController@RecortarImagenenRojo');//NIÑOS
Route::post('/amarillo', 'ActivitygameController@RecortarImagenenAmarillo');//NIÑOS
Route::post('/verde', 'ActivitygameController@RecortarImagenenVerde');//NIÑOS
Route::get('/todoslosmensajesdelsemaforo', 'ActivitygameController@mensajesSemaforo');//NIÑOS

Route::get('/actividades-juegos-joven-admin', 'ActivitygameController@jovenAdmin');//JOVENES
Route::get('/actividades-adultos-admin', 'ActivitygameController@adultoAdmin');//ADULTOS

Route::get('/actividades-preguntas-admin', 'QuestionController@index');
Route::get('/actividades-preguntas-listaPreguntas', 'QuestionController@listaPreguntas');
Route::post('/guardar-pregunta', 'QuestionController@store');
Route::post('/guardar-opcion', 'QuestionController@storeOption');
Route::get('/actividades-preguntas-listaOpciones', 'QuestionController@listaOpciones');

Route::get('/quiz-nino', 'QuizController@nino');
Route::get('/lista-radios', 'QuizController@listaRadios');
Route::get('/lista-text', 'QuizController@listaText');
