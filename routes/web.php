<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CertificateController;

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

// ALL
Route::get('/login', function () {
    return view('login',["title" => "homeStudent"]);
});
Route::post('/login', [LoginController::class, 'authenticate']);

// STUDENT

Route::get('/', function () {
    return view('student.homeStudent',["title" => "homeStudent"]);
});

Route::get('/signUpStudent', function () {
    return view('student.signUpStudent',["title" => "signUpStudent"]);
});

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signUpStudent', [RegisterController::class, 'store']);


Route::get('/homeStudent', function () {
    return view('student.homeStudent',["title" => "homeStudent"]);
});

Route::get('/articleStudent', function () {
    return view('student.articleStudent',["title" => "articleStudent"]);
});
Route::get('/showArticle', function () {
    return view('student.showArticle',["title" => "showArticle"]);
});

Route::get('/learnStudent/cards', function () {
    return view('student.learn.cards',["title" => "learnStudent"]);
});
Route::get('/learnStudent/games', function () {
    return view('student.learn.games',["title" => "learnStudent"]);
});

Route::get('/teacher', function () {
    return view('teacher.teacher',["title" => "teacher"]);
});
Route::get('/viewTeacher', function () {
    return view('viewTeacher',["title" => "viewTeacher"]);
});
Route::get('/profileStudent', function () {
    return view('student.profileStudent',["title" => "profileStudent"]);
});
Route::get('/findTeacher', function () {
    return view('findTeacher',["title" => "findTeacher"]);
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
Route::get('/learnStudent/studentLeaderboard', function () {
    return view('student.learn.leaderboard',["title" => "studentLeaderboard"]);
});



// TEACHER

Route::get('/signUpTeacher', function () {
    return view('teacher.signUpTeacher',["title" => "homeTeacher"]);
});

Route::post('/signUpTeacher', [RegisterController::class, 'store']);


Route::get('/homeTeacher', function () {
    return view('teacher.homeTeacher',["title" => "homeTeacher"]);
});
Route::get('/articleTeacher', function () {
    return view('teacher.articleTeacher',["title" => "articleTeacher"]);
});
Route::get('/teacherSchedule', function () {
    return view('teacher.teacherSchedule',["title" => "teacherSchedule"]);
});
Route::get('/profileTeacher', function () {
    return view('teacher.profileTeacher',["title" => "profileTeacher"]);
});
Route::get('/notificationTeacher', function () {
    return view('teacher.notificationTeacher',["title" => "notificationTeacher"]);
});


// ADMIN
Route::get('/homeAdmin', function () {
    return view('admin.homeAdmin',["title" => "homeAdmin"]);
});
Route::get('/articleAdmin', function () {
    return view('admin.articleAdmin',["title" => "articleAdmin"]);
});
Route::get('/showArticleAdmin', function () {
    return view('admin.showArticleAdmin',["title" => "showArticleAdmin"]);
});
Route::get('/addArticle', function () {
    return view('admin.addArticle',["title" => "addArticle"]);
});
// Route::get('/verifyPayment', function () {
//     return view('admin.verifyPayment',["title" => "verifyPayment"]);
// });

Route::get('/verifyPayment', [PaymentController::class, 'index']);
Route::get('/verifyTeacher', [CertificateController::class, 'index']);

Route::get('/profileAdmin', function () {
    return view('admin.profileAdmin',["title" => "profileAdmin"]);
});

//test
