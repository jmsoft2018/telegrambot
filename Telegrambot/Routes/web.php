<?php

Route::group(['namespace' => 'App\Telegrambot\Controllers', 'prefix' => '/telegrambot'], function(){

    Route::post('/', 'MainController@index');

});