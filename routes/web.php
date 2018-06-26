<?php


Route::get('/', 'Front\HomeController@index')->name('homepage');
Route::get('/c/{category}/{slug}', 'Front\HomeController@category')->name('category.detail');
Route::get('/n/{content}/{slug}', 'Front\HomeController@content')->name('content.detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
