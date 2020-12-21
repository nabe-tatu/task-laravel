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

Route::get('/test', function () {

});





Route::prefix('/v1')->namespace('Api\v1')->group(function () {
    Route::get('/userIndex',[\App\Http\Controllers\Api\v1\UserController::class,'index'])->name('user.index');
    Route::get('/folderUserIndex',[\App\Http\Controllers\Api\v1\FolderUserController::class,'index'])->name('user.index');;

});











Route::get('/{any?}', fn() => view('spa/app'))->where('any', '.+');











//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
