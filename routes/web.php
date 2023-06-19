<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\AcceptedStudentController;
use App\Http\Controllers\RegisterTeacherController;
use App\Http\Controllers\TeacherNotificationController;

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

// Sign Up
Route::get('/signUpStudent', function () {
    return view('student.signUpStudent',["title" => "signUpStudent"]);
});
Route::post('/signUpStudent', [RegisterController::class, 'store']);
Route::resource('/signUpTeacher', RegisterTeacherController::class);
Route::resource('/certificate', CertificateController::class);

// Login
Route::get('/login', function () {
    return view('login',["title" => "login"]);
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Learn
Route::get('/learnStudent/cards/katakana', function () {
    return view('student.learn.cards_katakana',["title" => "learnStudent"]);
});
Route::get('/learnStudent/cards/hiragana', function () {
    return view('student.learn.cards_hiragana',["title" => "learnStudent"]);
});
// buat halaman games
Route::resource('learnStudent/games', GameController::class);
// buat questions
Route::resource('/questions', PointController::class);
Route::get('/questions/{point_id}/{page_id}', [PageController::class, 'showNext']);
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



// Find Teacher
Route::get('/findTeacher', function () {
    return view('findTeacher',["title" => "findTeacher"]);
});
Route::get('/viewTeacher/{user:name}', [TeacherController::class, 'viewTeacher']);


// Teacher Notification
Route::resource('/notificationTeacher', TeacherNotificationController::class);
Route::resource('/requestTeacher', TeacherNotificationController::class);
Route::resource('/acceptedstudent', AcceptedStudentController::class);
Route::resource('/verifyTeacher', CertificateController::class);

// Home
Route::get('/', function () {
    return view('student.homeStudent',["title" => "homeStudent"]);
});
Route::get('/homeStudent', function () {
    return view('student.homeStudent',["title" => "homeStudent"]);
});
Route::get('/homeTeacher', function () {
    return view('teacher.homeTeacher',["title" => "homeTeacher"]);
});
Route::get('/homeAdmin', function () {
    return view('admin.homeAdmin',["title" => "homeAdmin"]);
});



// Article

Route::get('/admin/checkSlug',[ArticleAdminController::class, 'checkSlug']);
Route::delete('/admin/{article:slug}', [ArticleAdminController::class, 'destroy']);
Route::get('/admin/{article:slug}/edit', [ArticleAdminController::class, 'edit']);
Route::put('/admin/{article:slug}', [ArticleAdminController::class, 'update']);
Route::get('/admin/{article:slug}', [ArticleAdminController::class, 'show']);
Route::get('/teacher/{article:slug}', [ArticleAdminController::class, 'showteacher']);
Route::get('/student/{article:slug}', [ArticleAdminController::class, 'showstudent']);
Route::get('/jpnstudent/{article:id}', [ArticleAdminController::class, 'showstudentjpn']);
Route::get('/jpnteacher/{article:id}', [ArticleAdminController::class, 'showteacherjpn']);
Route::get('/jpnadmin/{article:id}', [ArticleAdminController::class, 'jpnshow']);
Route::get('/admin', [ArticleAdminController::class, 'index']);
Route::get('/articleStudent', [ArticleAdminController::class, 'indexStudent']);
Route::get('/articleTeacher', [ArticleAdminController::class, 'indexTeacher']);
Route::post('/admin', [ArticleAdminController::class, 'store']);
Route::get('/addArticle', [ArticleAdminController::class, 'create']);
Route::get('/author/{author:name}',[AuthorController::class, 'index']);



// Profile

Route::get('/profileStudent', [StudentController::class, 'index']);
Route::get('/profileStudent/{user:id}/edit', [StudentController::class, 'edit']);
Route::put('/profileStudent/{user:id}', [StudentController::class, 'update']);
Route::delete('/profileStudent/{user:id}', [StudentController::class, 'destroy']);

Route::get('/profileTeacher', [TeacherController::class, 'index']);
Route::get('/profileTeacher/{user:id}/edit', [TeacherController::class, 'edit']);
Route::put('/profileTeacher/{user:id}', [TeacherController::class, 'update']);
Route::delete('/profileTeacher/{user:id}', [TeacherController::class, 'destroy']);

Route::get('/profileAdmin', [AdminController::class, 'index']);
Route::get('/profileAdmin/{user:id}/edit', [AdminController::class, 'edit']);
Route::put('/profileAdmin/{user:id}', [AdminController::class, 'update']);
Route::delete('/profileAdmin/{user:id}', [AdminController::class, 'destroy']);


Route::get('/teacher', [TeacherController::class, 'showAllTeacher']);
Route::get('/fetch-cities', [TeacherController::class, 'fetchCities']);
Route::get('/fetchcities', [TeacherController::class, 'fetchAllCities']);

