<?php

Route::group(['namespace' => 'JMsoft\Telegrambot\Controllers', 'prefix' => '/telegrambot'], function(){

    Route::post('/', 'MainController@index');
    Route::get('/', 'MainController@index');

});