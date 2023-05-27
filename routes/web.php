<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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

Route::get('/', function () {
    return view('home');
});
Route::get('adminLogin',[AdminController::class,'AdminLogin']);
Route::post('adminLogin',[AdminController::class,'Admin'])->name('admin');
Route::get('createpost',[AdminController::class,'createpost'])->name('createpost');
Route::get('singlepost',[AdminController::class,'singlepost'])->name('singlepost');
Route::get('createcategory',[AdminController::class,'createcategory'])->name('createcategory');
