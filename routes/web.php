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

    //\App\Post::create([
    //    'title' => 'test title',
    //    'content' => 'test content',
    //]);

    //$post = new \App\Post();
    //$post->title = 'test title';
    //$post->content = 'test content';
    //$post->save();

    //$post = \App\Post::all();
    //dd($posts);

    //$post = \App\Post::find(1);
    //dd($post);

    //$posts = \App\Post::where('id','<',10)->orderBy('id','DESC')->get();
    //dd($posts);

    //$post = \App\Post::find(2);
    //$post->update([
    //    'title' => 'update title',
    //    'content' => 'update content',
    //]);

    //$post = \App\Post::find(10);
    //$post->title = 'save title';
    //$post->content = 'save content';
    //$post->save();

    //$post = \App\Post::find(1);
    //$post -> delete();

    //\App\Post::destroy(2);

    //\App\Post::destroy(3,5,7);

    //$allPosts = \App\Post::all();
    //dd($allPosts);

    //$featuredPosts = \App\Post::where('is_feature',1)->get();
    //dd($featuredPosts);

    $fourthPost=\App\Post::find(4);
    dd($fourthPost);

    $lastPost=\App\Post::orderBy('id','DESC')->first();
    dd($lastPost);
});

Route::get('posts',['as'=>'post.index','uses'=>'PostController@index']);
Route::get('post',['as'=>'post.post','uses'=>'PostController@post']);
Route::get('about',['as'=>'post.about','uses'=>'PostController@about']);
Route::get('contact',['as'=>'post.contact','uses'=>'PostController@contact']);





