<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostContoller;


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

Route::get('/',[HomeController::class,'showhome'])->name('showhome');
Route::get('adminLogin',[AdminController::class,'AdminLogin']);
Route::post('adminLogin',[AdminController::class,'Admin'])->name('admin');
Route::get('createpost',[PostContoller::class,'showcreatepost'])->name('showcreatepost');
Route::post('createpost',[PostContoller::class,'createpost'])->name('createpost');
Route::get('allposts',[PostContoller::class,'allposts'])->name('allposts');
Route::get('view/edit/{id}',[PostContoller::class,'showpostViewEdit'])->name('showpostViewEdit');
Route::post('view/edit/{id}',[PostContoller::class,'postViewEdit'])->name('postViewEdit');
Route::get('deletepost/{id}',[PostContoller::class,'deletepost'])->name('deletepost');
Route::get('singlepost',[PostContoller::class,'singlepost'])->name('singlepost');
Route::get('createcategory',[CategoryController::class,'showcreatecategory'])->name('showcreatecategory');
Route::post('createcategory',[CategoryController::class,'createcategory'])->name('createcategory');
