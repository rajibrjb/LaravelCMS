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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

//    post

    Route::get('/posts', [
        'as' => 'posts', 'uses' => 'PostsController@index'
    ]);

    Route::get('/posts/trashed', [
        'as' => 'posts.trashed', 'uses' => 'PostsController@trashed'
    ]);

    Route::get('/post/restore/{id}', [
        'as' => 'post.restore', 'uses' => 'PostsController@restore'
    ]);

    Route::get('/post/kill/{id}', [
        'as' => 'post.kill', 'uses' => 'PostsController@kill'
    ]);


    Route::get('/post/create', [
        'as' => 'post.create', 'uses' => 'PostsController@create'
    ]);

    Route::post('/post/store', [
        'as' => 'post.store', 'uses' => 'PostsController@store'
    ]);

    Route::get('/post/edit/{id}', [
        'as' => 'post.edit', 'uses' => 'PostsController@edit'
    ]);

    Route::post('/post/update/{id}', [
        'as' => 'post.update', 'uses' => 'PostsController@update'
    ]);

    Route::get('/post/delete/{id}', [
        'as' => 'post.delete', 'uses' => 'PostsController@destroy'
    ]);


        // Categories

    Route::get('/categories', [
        'as' => 'categories', 'uses' => 'CategoriesController@index'
    ]);

    Route::get('/category/create', [
        'as' => 'category.create', 'uses' => 'CategoriesController@create'
    ]);

    Route::post('/category/store', [
        'as' => 'category.store', 'uses' => 'CategoriesController@store'
    ]);

    Route::get('/category/edit/{id}', [
        'as' => 'category.edit', 'uses' => 'CategoriesController@edit'
    ]);

    Route::get('/category/delete/{id}', [
        'as' => 'category.delete', 'uses' => 'CategoriesController@destroy'
    ]);

    Route::post('/category/update/{id}', [
        'as' => 'category.update', 'uses' => 'CategoriesController@update'
    ]);


//    Tag


    Route::get('/tags', [
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    Route::get('/tag/edit/{id}', [
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::get('/tag/create', [
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    Route::post('/tag/store', [
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    Route::post('/tag/update/{id}', [
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    Route::get('/tag/delete/{id}', [
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
