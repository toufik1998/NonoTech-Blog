<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;




use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/blog', PostController::class);
Route::resource('/adminboard', MenuController::class);

Route::resource('/category', CategoryController::class);
Route::resource('/comments', CommentController::class);
Route::post('/comments/reply', [CommentController::class, 'reply'])->name('comments.reply');

Route::resource('/tag', TagController::class);


Route::resource('/', HomeController::class);

Route::controller(HomeController::class)->group(function(){
    Route::get('/home','index');
    Route::post('/home','search')->name('home.search');
    Route::get('/home/{id}', 'show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
