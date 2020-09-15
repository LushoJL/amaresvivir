<?php
/**
 * QUIENES SOMOS
 */
Route::get('/quienes-somos', 'AboutController@index')->name('about');
Route::get('/mision', 'AboutController@mission')->name('mission');
Route::get('/vision', 'AboutController@vision')->name('vision');
Route::get('/filosofia', 'AboutController@philosophy')->name('philosophy');
Route::get('/objetivos_institucionales', 'AboutController@institutionalObjectives')->name('institutionalObjectives');
Route::get('/organigrama', 'AboutController@organizationChart')->name('organizationChart');
