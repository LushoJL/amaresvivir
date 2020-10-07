<?php
/**
 * TU!! NOS IMPORTAS
 */
Route::get('/salud-mental', 'ImportyouController@saludmental')->name('saludmental');
Route::get('/que-pasa-cuando-lloramos', 'ImportyouController@cuandolloramos')->name('cuandolloramos');
Route::get('/una-pareja-sana', 'ImportyouController@parejasana')->name('parejasana');
Route::get('/emociones-vs-sentimientos', 'ImportyouController@sentimientos')->name('sentimientos');
