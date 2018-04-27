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

//     DB::insert('insert into posts(title, body) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing happend to PHP']);

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

Route::get('/delete', function() {
    $deleted = DB::delete('delete from posts where id = ?', [2]);
    return $deleted;
});