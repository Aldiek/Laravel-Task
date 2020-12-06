<?php
Route::group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
    'prefix' => 'admin',
], function () {

    Route::resource('category', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::resource('setting', 'SettingController');

});
