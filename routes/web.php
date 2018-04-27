<?php

use App\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('posts', 'PostsController');
// Route::get('/contact', 'PostsController@contact');

// Route::get('post/{id}/{name}/{pass}', 'PostsController@show_post');


/*
|--------------------------------------------------------------------------
| Raw DB SQL Query
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){

//     //using static method from the database class

//     DB::insert('insert into posts(title, body) values(?, ?)', ['Post Two', 'This is post tow']);

// });


// Route::get('/read', function(){

//     $results = DB::select('select * from posts where id = ?', [1]);

//     foreach($results as $result){
//         return $result->title;
//     }

// });

// Route::get('/update', function(){

//     $updated = DB::update('update posts set title ="Updated title" where id = ?', [1]);
//     return $updated;

// });

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ?', [2]);
//     return $deleted;
// });


/*
|--------------------------------------------------------------------------
| Eloquent object relational model(ORM)
|--------------------------------------------------------------------------
*/

// Route::get('/read', function() {
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title;
//     }
// });


// //Find By id
// Route::get('/find', function() {
//     $post = Post::find(3);

//         return $post->title;
   
// });

//Find where

// Route::get('/findwhere', function() {
//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->get();
//     return $posts;
// });

// Find More

// Route::get('/findmore', function(){

//     // $posts = Post::findOrFail(3);
//     // return $posts;
   
//     $posts = Post::where('users_count', '<', 50)->firstOrFail();


// });

//Inserting
    // Route::get('/basicinsert', function() {

    //     $post = new Post;

    //     $post->title = 'Post Three';
    //     $post->body = 'This is post three';

    //     $post->save();

    // });

//Update
    // Route::get('/basicupdate', function() {

    //     $post = Post::find(1);

    //     $post->title = 'Post One';
    //     $post->body = 'This is post one';

    //     $post->save();

    // });

    //Create

    Route::get('/create', function() {

        Post::create([
            'title' => 'Post Three',
            'body' => 'This is post three'
        ]);

    });