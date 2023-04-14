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

// STUDENT

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


// TEACHER
Route::get('/homeTeacher', function () {
    return view('homeTeacher',["title" => "homeTeacher"]);
});
Route::get('/articleTeacher', function () {
    return view('articleTeacher',["title" => "articleTeacher"]);
});
Route::get('/teacherSchedule', function () {
    return view('teacherSchedule',["title" => "teacherSchedule"]);
});
Route::get('/profileTeacher', function () {
    return view('profileTeacher',["title" => "profileTeacher"]);
});
Route::get('/notificationTeacher', function () {
    return view('notificationTeacher',["title" => "notificationTeacher"]);
});


// ADMIN
Route::get('/homeAdmin', function () {
    return view('homeAdmin',["title" => "homeAdmin"]);
});
Route::get('/articleAdmin', function () {
    return view('articleAdmin',["title" => "articleAdmin"]);
});
Route::get('/verifyPayment', function () {
    return view('verifyPayment',["title" => "verifyPayment"]);
});
Route::get('/verifyTeacher', function () {
    return view('verifyTeacher',["title" => "verifyTeacher"]);
});
Route::get('/profileAdmin', function () {
    return view('profileAdmin',["title" => "profileAdmin"]);
});
