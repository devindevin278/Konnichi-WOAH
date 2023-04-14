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
    return view('homeStudent',["title" => "homeStudent"]);
});

Route::get('/homeStudent', function () {
    return view('homeStudent',["title" => "homeStudent"]);
});


Route::get('/articleStudent', function () {
    return view('articleStudent',["title" => "articleStudent"]);
});
Route::get('/showArticle', function () {
    return view('showArticle',["title" => "showArticle"]);
});
Route::get('/showArticleJapan', function () {
    return view('showArticleJapan',["title" => "showArticleJapan"]);
});

Route::get('/learnStudent', function () {
    return view('learnStudent',["title" => "learnStudent"]);
});
Route::get('/teacher', function () {
    return view('teacher',["title" => "teacher"]);
});
Route::get('/profileStudent', function () {
    return view('profileStudent',["title" => "profileStudent"]);
});

// Route::get('/article', [ArticleController::class, 'index']);
// Route::get('article/{slug}', [ArticleController::class, 'showArticle']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
