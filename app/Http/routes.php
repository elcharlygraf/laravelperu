<?php

Route::group(['as' => 'user::', 'prefix' => 'user'], function () {

    Route::get('/perfil/{id?}', 'UserController@showProfile')->name('profile');

});
