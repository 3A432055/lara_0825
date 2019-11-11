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

    // < 練習2-2>使用 create 方法
   // \App\Post::create([
     //'title' => 'test title',
     //'content' => 'test content',
     //]);

    //< 練習2-5> 改用 new 的方式新增資料
     //$post = new \App\Post();
     //$post->title = 'test title';
     //$post->content = 'test content';
     //$post->save();

    //< 練習3-2> 使用 all 方法
     $posts = \App\Post::all();
     dd($posts);



    return view('welcome');
});
Route::get('posts', ['as' => 'posts.index',   'uses' => 'PostsController@index']);
Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@show']);
Route::get('about',    ['as' => 'posts.about',   'uses' => 'PostsController@about']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);
