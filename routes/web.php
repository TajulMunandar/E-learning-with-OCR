<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Article2Controller;
use App\Http\Controllers\Article3Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CallArticleController;
use App\Http\Controllers\CallArticle2Controller;
use App\Http\Controllers\CallArticleeController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardProgressController;

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

//article1
Route::controller(ArticleController::class)->group(function () {
    Route::get('/article', 'index1');
    Route::get('/article2', 'index2');
    Route::get('/article3', 'index3');
    Route::get('/article4', 'index4');
    Route::get('/article5', 'index5');
    Route::get('/article6', 'index6');
    Route::get('/article1', 'index7');
    Route::get('/selesai', 'selesai');
    Route::get('/quiz', 'quiz');
});

// call materi 1
Route::post('/call1', [CallArticleController::class, 'call1'])->name('call1');
Route::post('/call2', [CallArticleController::class, 'call2'])->name('call2');
Route::post('/call3', [CallArticleController::class, 'call3'])->name('call3');
Route::post('/call4', [CallArticleController::class, 'call4'])->name('call4');
Route::post('/call5', [CallArticleController::class, 'call5'])->name('call5');
Route::post('/call6', [CallArticleController::class, 'call6'])->name('call6');
Route::post('/call7', [CallArticleController::class, 'call7'])->name('call7');
Route::post('/call8', [CallArticleController::class, 'call8'])->name('call8');
Route::post('/call9', [CallArticleController::class, 'call9'])->name('call9');
Route::post('/call0', [CallArticleController::class, 'call0'])->name('call0');


//article2
Route::controller(Article2Controller::class)->group(function () {
    Route::get('/article11', 'index1');
    Route::get('/article12', 'index2');
    Route::get('/article13', 'index3');
    Route::get('/article14', 'index4');
    Route::get('/article15', 'index5');
    Route::get('/article16', 'index6');
    Route::get('/article17', 'index7');
    Route::get('/article18', 'index8');
});

//callback article2
Route::post('/call10', [CallArticle2Controller::class, 'call0'])->name('call10');
Route::post('/call11', [CallArticle2Controller::class, 'call1'])->name('call11');
Route::post('/call12', [CallArticle2Controller::class, 'call2'])->name('call12');
Route::post('/call13', [CallArticle2Controller::class, 'call3'])->name('call13');
Route::post('/call14', [CallArticle2Controller::class, 'call4'])->name('call14');
Route::post('/call15', [CallArticle2Controller::class, 'call5'])->name('call15');
Route::post('/call16', [CallArticle2Controller::class, 'call6'])->name('call16');
Route::post('/call17', [CallArticle2Controller::class, 'call7'])->name('call17');
Route::post('/call18', [CallArticle2Controller::class, 'call8'])->name('call18');

//article3
Route::controller(Article3Controller::class)->group(function () {
    Route::get('/article21', 'index1');
    Route::get('/article22', 'index2');
    Route::get('/article23', 'index3');
    Route::get('/article24', 'index4');
});

//callback article3
Route::post('/call20', [CallArticleeController::class, 'call0'])->name('call20');
Route::post('/call21', [CallArticleeController::class, 'call1'])->name('call21');
Route::post('/call22', [CallArticleeController::class, 'call2'])->name('call22');
Route::post('/call23', [CallArticleeController::class, 'call3'])->name('call23');
Route::post('/call24', [CallArticleeController::class, 'call4'])->name('call24');

Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');

// Dashboard
Route::prefix('/dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

    Route::resource('/user/list-user', DashboardUserController::class)->middleware('dashboard');;
    Route::post('/user/list-user/reset-password', [DashboardUserController::class, 'resetPasswordAdmin'])->middleware('dashboard');

    Route::get('/progress/materi-1', [DashboardProgressController::class, 'materi1'])->middleware('dashboard');
    Route::get('/progress/materi-2', [DashboardProgressController::class, 'materi2'])->middleware('dashboard');
    Route::get('/progress/materi-3', [DashboardProgressController::class, 'materi3'])->middleware('dashboard');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::post('/profile', [ProfileController::class, 'update'])->name('profile');
