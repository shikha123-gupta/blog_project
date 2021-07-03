<?php

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
use App\Http\Controllers\BlogController;
Route::get('/', function () {
    echo "shikha";
});

Route::get('blog/index',[BlogController::class,'addblog']);
Route::get('blog/addblog',[BlogController::class,'blog']);
Route::post('blog/save',[BlogController::class,'save']);
Route::get('blog/display',[BlogController::class,'display']);
Route::get('blog/view/{id}',[BlogController::class,'view']);
Route::get('blog/edit/{id}',[BlogController::class,'edit']);
Route::post('blog/update',[BlogController::class,'update']);
Route::get('blog/delete/{id}',[BlogController::class,'delete']);