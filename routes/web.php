<?php

use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Videao;
use App\Tag;
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

//..............Update
    // Route::get('/basicupdate', function() {

    //     $post = Post::find(1);

    //     $post->title = 'Post One';
    //     $post->body = 'This is post one';

    //     $post->save();

    // });

    //..................Create

    // Route::get('/create', function() {

    //     Post::create([
    //         'title' => 'Post One',
    //         'content' => 'This is post One'
    //         'user_id' => ''
    //     ]);

    // });


    /////////craete user
    // Route::get('/create-user', function(){
    //     User::create([
    //         'name' => 'admin',
    //         'email' => 'admin@lara.com',
    //         'password' => 'momast5546'
    //     ]);
    // });

    //.....................Update
    // Route::get('/update', function() {

    //     Post::where('id', 2)->where('is_admin', 0)->update([
    //         'title' => 'Updated Post Two',
    //         'body'  => 'This is updated post tow'
    //     ]);

    // });

    //...........................Delete
    // Route::get('/delete', function(){

    //     $post = Post::find(3);
    //     $post->delete();
    // });

    //..................Other way to delete
    // Route::get('/delete2', function(){
    //     Post::destroy(2);
    // });

    // .................To delete more than on 

    // Route::get('/delete3', function(){
    //     Post::destroy([4,5]);
    // });
    

    // ...............Soft Delete

    // Route::get('/softdelete', function() {

    //     Post::find(6)->delete();

    // });

    //...............Read Soft Delete

    // Route::get('/raedsoftdel', function() {

    //     // $post = Post::find(1);
    //     // return $post;

    //     $post = Post::withTrashed()->where('id', 1)->get();
    //     return $post;

    //     $post = Post::onlyTrashed()->where('is_admin', 0)->get();
    //     return $post;

    // });

    // //.................... Restored Trashed Items

    // Route::get('/restore', function(){
    //     Post::withTrashed()->where('is_admin',0)->restore();
    // });

    //....................Force Delete Permenantly

    // Route::get('/forcedel', function(){
    //     Post::withTrashed()->where('is_admin',0)->forceDelete();
    // });




    /*
    |--------------------------------------------------------------------------
    | RelationShip in Eloquent object relational model(ORM)
    |--------------------------------------------------------------------------
    */

    // One to One relationship.
    // Route::get('/user/{id}/post', function($id) {
    //     return User::find($id)->post;
    //     return User::find($id)->post->title;
                        
    // });

    // The inverse relationship.
    // Route::get('/post/{id}/user', function($id) {
    //     return Post::find($id)->user->name;
    // });
    

    // One to Many relationship.
    // Route::get('/posts', function() {

    //     $user = User::find(1);

    //     foreach($user->posts as $post){
    //         echo $post->title."<br>";
    //     }

    // });


    // Many To Many Relationship

    // Route::get('/user/{id}/role', function($id){ 
    // //    $user = User::find($id);
        
    // //     foreach($user->roles as $role) {
    // //         return $role->name;
    // //     }
    // //  other way
    //     $user = User::find()->roles()->orderBy('id', 'desc')->get();
    //     return $user;
    // });

    // // Accessing the Intermediate table (the pivote table)

    // Route::get('user/pivot', function() {

    //     $user = User::find(1);

    //     foreach($user->roles as $role) {
    //         echo $role->pivot->created_at;
    //     }

    // });


    //.Has Many Through Relation

    // Route::get('/user/country', function() {

    //    $country = Country::find(5);

    //     foreach($country->posts as $post) {
    //         return $post->title;
    //     }
    // });

        
    //Polymorphic Relations

    // Route::get('/user/photo', function() {

    //     $user = User::find(1);

    //     foreach($user->photos as $photo) {
    //         // return $photo;
    //         echo $photo->path;
    //     }

    // });

    // Route::get('/post/photo', function() {

    //     $post = Post::find(1);

    //     foreach($post->photos as $photo) {
    //         echo $photo->path.'<br>';

    //     }

    // });

    // //Inverse Polymorphic Relations

    // Route::get('/photo/{id}/post', function($id){

    //     $photo = Photo::findOrFail($id);

    //     return $photo->imageable;

    // });


    //Polymorhpic Many to Many

    // Route::get('/post/tag', function() {
    //     $post = Post::find(1);

    //     foreach($post->tags as $tag) {
    //         echo $tag->name;
    //     }
    // });

    Route::get('/tag/post', function() {

        $tag = Tag::find(2);

        foreach($tag->posts as $post) {
            return $post->title;
        }

        // return $tag;
    });

