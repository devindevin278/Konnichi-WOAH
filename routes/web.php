<?php
use App\Models\Author;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterTeacherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    return view('login',["title" => "login"]);
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

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

Route::get('/learnStudent/cards/katakana', function () {
    return view('student.learn.cards_katakana',["title" => "learnStudent"]);
});
Route::get('/learnStudent/cards/hiragana', function () {
    return view('student.learn.cards_hiragana',["title" => "learnStudent"]);
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
Route::get('/learnStudent/studentLeaderboard', function () {
    return view('student.learn.leaderboard',["title" => "studentLeaderboard"]);
});



// TEACHER

// Route::get('/signUpTeacher', function () {
//     return view('teacher.signUpTeacher',["title" => "signUpTeacher"]);
// });

Route::resource('/signUpTeacher', RegisterTeacherController::class);
// Route::post('/signUpTeacher', [RegisterTeacherController::class, 'store']);

Route::resource('/certificate', CertificateController::class);


Route::get('/homeTeacher', function () {
    return view('teacher.homeTeacher',["title" => "homeTeacher"]);
});
Route::get('/articleTeacher', function () {
    return view('teacher.articleTeacher',["title" => "articleTeacher"]);
});
Route::get('/teacherSchedule', function () {
    return view('teacher.teacherSchedule',["title" => "teacherSchedule"]);
});
// Route::get('/profileTeacher', function () {
//     return view('teacher.profileTeacher',["title" => "profileTeacher"]);
// });
Route::get('/viewTeacher', function () {
    return view('teacher.viewTeacher',["title" => "viewTeacher"]);
});
Route::get('/notificationTeacher', function () {
    return view('teacher.notificationTeacher',["title" => "notificationTeacher"]);
});


// ADMIN
Route::get('/homeAdmin', function () {
    return view('admin.homeAdmin',["title" => "homeAdmin"]);
});
Route::get('/showArticleAdmin', function () {
    return view('admin.showArticleAdmin',["title" => "showArticleAdmin"]);
});
Route::get('/addArticle', function () {
    return view('admin.addArticle',["title" => "addArticle"]);
});

Route::get('/verifyPayment', [PaymentController::class, 'index']);
Route::resource('/verifyTeacher', CertificateController::class);

Route::get('/profileAdmin', function () {
    return view('admin.profileAdmin',["title" => "profileAdmin"]);
});


Route::get('/admin/checkSlug',[ArticleAdminController::class, 'checkSlug']);
Route::delete('/admin/{article:slug}', [ArticleAdminController::class, 'destroy']);
Route::get('/admin/{article:slug}/edit', [ArticleAdminController::class, 'edit']);
Route::put('/admin/{article:slug}', [ArticleAdminController::class, 'update']);
Route::get('/admin/{article:slug}', [ArticleAdminController::class, 'show']);
Route::get('/admin', [ArticleAdminController::class, 'index']);
Route::get('/articleStudent', [ArticleAdminController::class, 'indexStudent']);
Route::get('/articleTeacher', [ArticleAdminController::class, 'indexTeacher']);
Route::post('/admin', [ArticleAdminController::class, 'store']);
Route::get('/addArticle', [ArticleAdminController::class, 'create']);
Route::get('/author/{author:name}',[AuthorController::class, 'index']);

Route::get('/profileStudent', [StudentController::class, 'index']);
Route::get('/profileStudent/{user:id}/edit', [StudentController::class, 'edit']);
Route::put('/profileStudent/{user:id}', [StudentController::class, 'update']);
Route::delete('/profileStudent/{user:id}', [StudentController::class, 'destroy']);

Route::get('/profileTeacher', [TeacherController::class, 'index']);
Route::get('/profileTeacher/{user:id}/edit', [TeacherController::class, 'edit']);
Route::put('/profileTeacher/{user:id}', [TeacherController::class, 'update']);
Route::delete('/profileTeacher/{user:id}', [TeacherController::class, 'destroy']);
