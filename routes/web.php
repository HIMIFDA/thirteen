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

Route::group(array('prefix' => 'api'), function() {


    // api blog
    Route::group(array('prefix' => 'blog'), function() {
        
        Route::get('/get', [
                'as' => 'api-blog-index', 'uses' => 'Api\ApiBlogController@getPosts'
            ]); 

        Route::get('/get/{id}', [
                'as' => 'api-blog-get', 'uses' => 'Api\ApiBlogController@getPost'
            ]); 

    });

});


Route::group(array('prefix' => 'dashboard'), function() {

    Route::get('/', [
        'as' => 'dashboard-index', 'uses' => 'DashboardController@index'
    ]); 

    // dashboard blog
    Route::group(array('prefix' => 'blog'), function() {
        Route::get('/', [
                'as' => 'blog-index', 'uses' => 'DashboardBlogController@index'
            ]); 

        Route::get('/new', [
            'as' => 'blog-new', 'uses' => 'DashboardBlogController@new_post'
        ]); 

        Route::post('/new', [
            'as' => 'blog-submit', 'uses' => 'DashboardBlogController@submit_post'
        ]); 

        Route::get('/delete/{id}', [
            'as' => 'blog-delete', 'uses' => 'DashboardBlogController@delete'
        ]); 

        Route::get('/edit/{id}', [
            'as' => 'blog-edit', 'uses' => 'DashboardBlogController@edit'
        ]); 

        Route::post('/edit', [
            'as' => 'blog-update', 'uses' => 'DashboardBlogController@update'
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
