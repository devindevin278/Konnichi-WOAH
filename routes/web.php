<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\Auth\LoginController;

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
// Google Authentication
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('register/google', [RegisterController::class, 'redirectToGoogle'])->name('register.google');
// Route::get('register/google/callback', [RegisterController::class, 'handleGoogleCallback']);

// Route::get('/register/google/callback', [RegisterController::class, 'handleGoogleCallback']);
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);




// Learn
Route::get('/learnStudent/cards/katakana', function () {
    return view('student.learn.cards_katakana',["title" => "learnStudent"]);
});
Route::get('/learnStudent/cards/hiragana', function () {
    return view('student.learn.cards_hiragana',["title" => "learnStudent"]);
});
// buat halaman games
Route::resource('learnStudent/games', GameController::class)->middleware('auth');
// buat questions
// Route::resource('/questions', PointController::class);
Route::get('/notebook/{unit_id}', [PageController::class, 'showNote']);
Route::post('/questions', [PageController::class, 'showPage']);
Route::post('/questions/cancel', [PageController::class, 'cancel']);

// Buat Graph
Route::get('/weekChart', [GameController::class, 'weekChart']);
Route::get('/monthChart', [GameController::class, 'monthChart']);
Route::get('/yearChart', [GameController::class, 'yearChart']);


// Route::get('/questions/{point_id}/{page_id}', [PageController::class, 'showNext']);


Route::get('/completed', [PageController::class, 'succeed']);

// Route::get('/completed/{point_id}', [PageController::class, 'succeed']);
Route::post('/completed', [GameController::class, 'succeed']);
Route::post('/XPscore', [GameController::class, 'store']);
Route::post('/saveTemp', [GameController::class, 'storeTemp']);
Route::put('/openChest', [GameController::class, 'openChest']);
// Route::get('/viewTeacher', function () {
//     return view('teacher.viewTeacher',["title" => "viewTeacher"]);
// });


Route::get('/findTeacher', function () {
    return view('findTeacher',["title" => "findTeacher"]);
});


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
Route::get('/learnStudent/studentLeaderboard', [StudentController::class, 'leaderboard']);



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
    return view('student.homeStudent3',["title" => "homeStudent"]);
})->middleware('guest');
Route::get('/homeStudent', function () {
    return view('student.homeStudent3',["title" => "homeStudent"]);
})->middleware('auth')->middleware('student');
Route::get('/homeTeacher', function () {
    return view('teacher.homeTeacher',["title" => "homeTeacher"]);
})->middleware('teacher');
Route::get('/homeAdmin', function () {
    return view('admin.homeAdmin',["title" => "homeAdmin"]);
})->middleware('admin');


//test
// Article

Route::get('/admin/checkSlug',[ArticleAdminController::class, 'checkSlug'])->middleware('admin');
Route::delete('/admin/{article:slug}', [ArticleAdminController::class, 'destroy'])->middleware('admin');
Route::get('/admin/{article:slug}/edit', [ArticleAdminController::class, 'edit'])->middleware('admin');
Route::put('/admin/{article:slug}', [ArticleAdminController::class, 'update'])->middleware('admin');
Route::get('/admin/{article:slug}', [ArticleAdminController::class, 'show'])->middleware('admin');
Route::get('/teacher/{article:slug}', [ArticleAdminController::class, 'showteacher'])->middleware('teacher');
Route::get('/student/{article:slug}', [ArticleAdminController::class, 'showstudent'])->middleware('student');
Route::get('/jpnstudent/{article:id}', [ArticleAdminController::class, 'showstudentjpn'])->middleware('student');
Route::get('/jpnteacher/{article:id}', [ArticleAdminController::class, 'showteacherjpn'])->middleware('teacher');
Route::get('/jpnadmin/{article:id}', [ArticleAdminController::class, 'jpnshow'])->middleware('admin');
Route::get('/admin', [ArticleAdminController::class, 'index'])->middleware('admin');
Route::get('/articleStudent', [ArticleAdminController::class, 'indexStudent'])->middleware('auth')->middleware('student');
Route::get('/articleTeacher', [ArticleAdminController::class, 'indexTeacher'])->middleware('teacher');
Route::post('/admin', [ArticleAdminController::class, 'store'])->middleware('admin');
Route::get('/addArticle', [ArticleAdminController::class, 'create'])->middleware('admin');
Route::get('/author/{author:name}',[AuthorController::class, 'index'])->middleware('admin');



// Profile

Route::get('/profileStudent', [StudentController::class, 'index'])->middleware('auth')->middleware('student');
Route::get('/profileStudent/{user:id}/edit', [StudentController::class, 'edit'])->middleware('student');
Route::put('/profileStudent/{user:id}', [StudentController::class, 'update'])->middleware('student');
Route::delete('/profileStudent/{user:id}', [StudentController::class, 'destroy'])->middleware('student');

Route::get('/profileTeacher', [TeacherController::class, 'index'])->middleware('teacher');
Route::get('/profileTeacher/{user:id}/edit', [TeacherController::class, 'edit'])->middleware('teacher');
Route::put('/profileTeacher/{user:id}', [TeacherController::class, 'update'])->middleware('teacher');
Route::delete('/profileTeacher/{user:id}', [TeacherController::class, 'destroy'])->middleware('teacher');

Route::get('/profileAdmin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/profileAdmin/{user:id}/edit', [AdminController::class, 'edit'])->middleware('admin');
Route::put('/profileAdmin/{user:id}', [AdminController::class, 'update'])->middleware('admin');
Route::delete('/profileAdmin/{user:id}', [AdminController::class, 'destroy'])->middleware('admin');


Route::get('/teacher', [TeacherController::class, 'showAllTeacher'])->middleware('auth')->middleware('student');
Route::get('/fetch-cities', [TeacherController::class, 'fetchCities'])->middleware('student');
Route::get('/fetchcities', [TeacherController::class, 'fetchAllCities'])->middleware('teacher');

