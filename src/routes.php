<?php


//Route::group(array('prefix' => config('saml2_settings.routesPrefix')), function () {
Route::group(array('prefix' => 'test'), function () {

    Route::post('/token', [
        'uses' => 'SIUToba\Oauth2\Http\Controllers\Oauth2Controller@token',
    ]);

//    Route::get('/login', array(
//        'as' => 'saml_login',
//        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@login',
//    ));
//
//    Route::get('/metadata', array(
//        'as' => 'saml_metadata',
//        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@metadata',
//    ));
//
//    Route::post('/acs', array(
//        'as' => 'saml_acs',
//        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@acs',
//    ));
//
//    Route::get('/sls', array(
//        'as' => 'saml_sls',
//        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@sls',
//    ));
});
