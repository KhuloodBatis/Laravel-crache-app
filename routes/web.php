<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostsController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

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

// Route::get('test',function(){
//     return view('test');
// } );

// Route::get('/',function(){
//  $name = request('name');

//  return view('test',[
//     'name' => $name
//  ]) ;
// });


// Route::get('/posts/{post}', function($post){

//     $posts = [
//       'my-first-post'=>'Hello, this is my first blog post',
//       'my-sceond-post'=>'Now i am getting the hang of this blogging thing'
//     ];
//  if(! array_key_exists($post,$posts)){
//     abort(404, 'Sorry, that post was not found.');
//  }
//    return view('post',[
//     'post'=>$posts[$post]
//     //?? 'Nothing here yet. '
//    ]);
// });

// Route::get('/posts/{post}',[PostsController::class,'show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update']);
Route::delete('/articles/{article}/delete', [ArticleController::class, 'delete']);

Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
