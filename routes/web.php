<?php

use App\Http\Controllers\backend\AuthenticationController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostContoller;
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
// frontend start
Route::get('/', [HomeController::class, 'showhome'])->name('showhome');

Route::get('singlepost',[PostContoller::class,'singlepost'])->name('singlepost');
// frontend end

// backend start
Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::match(['get', 'post'], 'login', [AuthenticationController::class, 'admin_login'])->name('login');
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('createcategory', [CategoryController::class, 'showcreatecategory'])->name('showcreatecategory');
        Route::post('createcategory', [CategoryController::class, 'createcategory'])->name('createcategory');
        Route::get('createpost', [PostContoller::class, 'showcreatepost'])->name('showcreatepost');
        Route::post('createpost', [PostContoller::class, 'createpost'])->name('createpost');
        Route::get('allposts', [PostContoller::class, 'allposts'])->name('allposts');
        Route::get('view/edit/{id}', [PostContoller::class, 'showpostViewEdit'])->name('showpostViewEdit');
        Route::post('view/edit/{id}', [PostContoller::class, 'postViewEdit'])->name('postViewEdit');
        Route::get('deletepost/{id}', [PostContoller::class, 'deletepost'])->name('deletepost');

    });

});
// backend end
