<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth'], // auth.type:admin,super_dmin
    'prefix'    => 'dashboard',
    'dashboard' => 'dashboard.',
],function(){
    Route::resource('categories',CategoriesController::class);

});
