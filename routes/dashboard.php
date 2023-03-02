<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\PostsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth'], // auth.type:admin,super_dmin
    'prefix'    => 'dashboard',
    'dashboard' => 'dashboard.',
],function(){
    Route::get('/posts/trashed',[PostsController::class,'trash'])->name('posts.trashed');
    Route::get('posts/{id}/restore',[PostsController::class,'restore'])->name('posts.restore');
    Route::delete('posts/{id}/forse-delete',[PostsController::class,'forsedelete'])->name('posts.forsedelete');

    Route::resource('categories',CategoriesController::class);
    Route::resource('posts', PostsController::class);



});
