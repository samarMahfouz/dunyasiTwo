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

Route::get('/posts', 'HomeController@index');
Route::get('/control', 'HomeController@control');
Route::post('/updaterole/{user}', 'HomeController@updateRole');

// AUTH ROUTES
Route::get('/posts', 'postsController@showPosts');
Route::get('/allposts', 'postsController@allPosts');
Route::get('/aboutme', 'PagesController@admininfo');
Route::get('/statistics', 'PagesController@statistics');
Route::get('/posts/{post}', 'postsController@viewPost');
Route::post('/posts/store', 'postsController@postNew');
Route::post('/posts/{post}/store', 'commentsController@commentNew');
Route::get('allPosts/{post}/delete', 'postsController@delete');
