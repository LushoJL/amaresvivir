<?php
/**
 * ACTIVIDADES Y JUEGOS
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/actividades-juegos-admin', 'ActivitygameController@niñoAdmin');//NIÑOS
    Route::post('/rojo', 'ActivitygameController@RecortarImagenenRojo');//NIÑOS
    Route::post('/amarillo', 'ActivitygameController@RecortarImagenenAmarillo');//NIÑOS
    Route::post('/verde', 'ActivitygameController@RecortarImagenenVerde');//NIÑOS
    Route::get('/todoslosmensajesdelsemaforo', 'ActivitygameController@mensajesSemaforo');//NIÑOS
    Route::post('/rol','ActivitygameController@rolPost');

    Route::get('/actividades-juegos-joven-admin', 'ActivitygameController@jovenAdmin');//JOVENES
    Route::get('/actividades-adultos-admin', 'ActivitygameController@adultoAdmin');//ADULTOS

    Route::get('/actividades-preguntas-admin', 'QuestionController@index');
    Route::get('/actividades-preguntas-listaPreguntas', 'QuestionController@listaPreguntas');
    Route::get('/actividades-preguntas-listaPreguntas-nina', 'QuestionController@listaPreguntasNina');
    Route::post('/guardar-pregunta', 'QuestionController@store');
    Route::put('/actualizar-pregunta/{id}', 'QuestionController@update');
    Route::put('/actualizar-pregunta-nina/{id}', 'QuestionController@updateNina');
    Route::delete('/borrar-preginta/{id}', 'QuestionController@destroy');
    Route::delete('/borrar-preginta-nina/{id}', 'QuestionController@destroyNina');
    Route::post('/guardar-pregunta-nina', 'QuestionController@storeNina');
    Route::post('/guardar-opcion', 'QuestionController@storeOption');
    Route::put('/actualizar-opcion/{id}', 'QuestionController@updateOption');
    Route::post('/guardar-opcion-nina', 'QuestionController@storeOptionNina');
    Route::put('/actualizar-opcion-nina/{id}', 'QuestionController@updateOptionNina');
    Route::get('/actividades-preguntas-listaOpciones', 'QuestionController@listaOpciones');
    Route::get('/listaOpciones-nina', 'QuestionController@opcionesNina');
    Route::delete('/borrar-opcion/{id}', 'QuestionController@destroyOption');
    Route::delete('/borrar-opcion-nina/{id}', 'QuestionController@destroyOptionNina');



});

