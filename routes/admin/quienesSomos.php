<?php
/**
 * QUIENES SOMOS
 */
Route::get('/quienes-somos-admin', 'AboutController@indexAdmin');
Route::get('/mision-admin', 'AboutController@missionAdmin');
Route::get('/vision-admin', 'AboutController@visionAdmin');
Route::get('/filosofia-admin', 'AboutController@philosophyAdmin');
Route::get('/objetivos_institucionales-admin', 'AboutController@institutionalObjectivesAdmin');
Route::get('/organigrama-admin', 'AboutController@organizationChartAdmin');
