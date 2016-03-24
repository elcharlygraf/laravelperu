<?php

Route::group(['as' => 'user::', 'prefix' => 'user'], function () {
	
	Route::get('/{name?}', 'UserController@index')->name('index');

    Route::get('/perfil/{id?}', 'UserController@showProfile')->name('profile');

});
