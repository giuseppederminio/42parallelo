<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('/galleria/index',[PublicController::class,'index'])->name('galleria.index');
Route::get('/contatti', [PublicController::class,'contatti'])->name('contatti');
// disattivo i db e cio che gli riguardano
// Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');
Route::get('/galleria/alba',[PublicController::class,'indexAlba'])->name('galleria.alba');
Route::get('/galleria/tramonto',[PublicController::class,'indexTramonto'])->name('galleria.tramonto');

// rotta cambio lingua
Route::get('setlocale/{locale}', [LocaleController::class, 'setLocale'])->name('setlocale');
