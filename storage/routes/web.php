<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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



//Route functions to get the blade views for the htmls

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createpost', function () {
    return view('createpost');
});
Route::get('/submitidea', function () {
    return view('submitidea');
});

Route::get('/commentpost', function () {
    return view('commentpost');
});


//Routes in Controllers

Route::post('/createpost', [PostController::class, 'create_post'])->name('createpost'); // Create a new post

Route::get('/', [PostController::class, 'list_post'])->name('list_post'); // Display all posts

Route::get('/post/{postId}', [PostController::class, 'show_post'])->name('show_post'); // Display a specific post with comments

Route::post('/comments/create/{postId}', [CommentController::class, 'create'])->name('comments.create'); // Create a new comment

Route::get('/showpostwithComments/{postId}', [CommentController::class, 'displayComments'])->name('displayComments'); // Display comments for a specific post


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
