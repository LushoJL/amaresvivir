<?php
Route::group(['middleware' => ['auth']], function () {
    /**
     * QUIENES SOMOS
     */
    Route::get('/quienes-somos-admin', 'AboutController@indexAdmin')->name('quienesSomos');
    Route::get('/todoslosdatosdequienessomosadmin', 'AboutController@requestdatos');
    Route::post('/guardardatos', 'AboutController@GuardarDatos');
});


