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

Route::get('/learnStudent', function () {
    return view('learnStudent',["title" => "learnStudent"]);
});
Route::get('/teacher', function () {
    return view('teacher',["title" => "teacher"]);
});
Route::get('/viewTeacher', function () {
    return view('viewTeacher',["title" => "viewTeacher"]);
});
Route::get('/profileStudent', function () {
    return view('profileStudent',["title" => "profileStudent"]);
});

// Route::get('/article', [ArticleController::class, 'index']);
// Route::get('article/{slug}', [ArticleController::class, 'showArticle']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// GAMES
Route::get('/1', function () {
    return view('1',["title" => "1"]);
});
Route::get('/2', function () {
    return view('2',["title" => "2"]);
});
Route::get('/3', function () {
    return view('3',["title" => "3"]);
});
Route::get('/4', function () {
    return view('4',["title" => "4"]);
});
Route::get('/5', function () {
    return view('5',["title" => "5"]);
});
Route::get('/6', function () {
    return view('6',["title" => "6"]);
});
Route::get('/7', function () {
    return view('7',["title" => "7"]);
});
Route::get('/8', function () {
    return view('8',["title" => "8"]);
});
Route::get('/9', function () {
    return view('9',["title" => "9"]);
});
Route::get('/10', function () {
    return view('10',["title" => "10"]);
});
Route::get('/studentLeaderboard', function () {
    return view('studentLeaderboard',["title" => "studentLeaderboard"]);
});



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
Route::get('/showArticleAdmin', function () {
    return view('showArticleAdmin',["title" => "showArticleAdmin"]);
});
Route::get('/addArticle', function () {
    return view('addArticle',["title" => "addArticle"]);
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
