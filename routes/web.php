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

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',['as'=>'post.index','uses'=>'PostController@index']);
Route::get('post',['as'=>'post.post','uses'=>'PostController@post']);
Route::get('about',['as'=>'post.about','uses'=>'PostController@about']);
Route::get('contact',['as'=>'post.contact','uses'=>'PostController@contact']);
