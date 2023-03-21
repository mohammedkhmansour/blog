<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\CommentsController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\NewsLatterController;
use App\Http\Controllers\Dashboard\NotificationsController;
use App\Http\Controllers\Dashboard\PostsController;
use App\Http\Controllers\Dashboard\SettingsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth'], // auth.type:admin,super_dmin
    'prefix'    => 'dashboard',
    'dashboard' => 'dashboard.',
],function(){

    // soft delete
    Route::get('/posts/trashed',[PostsController::class,'trash'])->name('posts.trashed');
    Route::get('posts/{id}/restore',[PostsController::class,'restore'])->name('posts.restore');
    Route::delete('posts/{id}/forse-delete',[PostsController::class,'forsedelete'])->name('posts.forsedelete');
    // notifications
    Route::get('MarkAsRead_all',[NotificationsController::class,'MarkAsRead_all'])->name('MarkAsRead_all');

    // Route::get('notifactionred',[NotificationsController::class,'notifactionred'])->name('notifactionred');

    // approved comment
    Route::get('dashboard/approved/{id}',[CommentsController::class,'approved'])->name('comments.approved');

    Route::resource('categories',CategoriesController::class);
    Route::resource('posts', PostsController::class);

    // settings
    Route::get('/settings', [SettingsController::class, 'edit'])
    ->name('settings.edit');
Route::patch('/settings', [SettingsController::class, 'update'])
    ->name('settings.update');

    Route::resource('comments', CommentsController::class)->except(['create','store','edit','update']);
    Route::resource('contacts', ContactController::class)->except(['create','store','edit','update']);
    Route::resource('newslatter', NewsLatterController::class)->except(['create','store','edit','update']);




});
