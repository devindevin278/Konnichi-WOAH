<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',["title" => "home"]);
});

Route::get('/home', function () {
    return view('home',["title" => "home"]);
});


Route::get('/article', function () {
    return view('article',["title" => "article"]);
});
Route::get('/showArticle', function () {
    return view('showArticle',["title" => "showArticle"]);
});
Route::get('/showArticleJapan', function () {
    return view('showArticleJapan',["title" => "showArticleJapan"]);
});

Route::get('/learn', function () {
    return view('learn',["title" => "learn"]);
});
Route::get('/teacher', function () {
    return view('teacher',["title" => "teacher"]);
});
Route::get('/profile', function () {
    return view('profile',["title" => "profile"]);
});

// Route::get('/article', [ArticleController::class, 'index']);
// Route::get('article/{slug}', [ArticleController::class, 'showArticle']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
