<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(array('prefix' => 'dashboard'), function() {

    // dashboard blog
    Route::group(array('prefix' => 'blog'), function() {
        Route::get('/', [
                'as' => 'blog-index', 'uses' => 'DashboardBlogController@index'
            ]); 
    });

    // dashboard people
    Route::group(array('prefix' => 'people'), function() {
        Route::get('/', [
                'as' => 'people-index', 'uses' => 'DashboardPeopleController@index'
            ]); 
    });


});

// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
