<?php

use App\Http\Controllers\Front\CommentsController;
use App\Http\Controllers\Front\HomePageController;
use App\Http\Controllers\Front\PostDetailsController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('front.index');

// });

Route::get('/',[HomePageController::class,'index']);
// Route::get('/posts/front/{category:slug}/{post:slug}',[HomePageController::class,'show'])->name('post.details');
Route::get('post/details/{post:slug}',[HomePageController::class,'show'])->name('post.det');
Route::get('search',[HomePageController::class,'search'])->name('search');

// route comment store
Route::post('comments/store',[CommentsController::class,'store'])->name('comments.store');


Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('layouts.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';

// Route::view('dashboard', 'layouts.index');
Route::view('postindex', 'dashboard.posts.create');
