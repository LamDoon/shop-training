<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MainUserController;

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

Route::get('/', [MainUserController::class,'index']);

Route::get('admin/login',[LoginController::class,'index'])->name('login');
Route::post('admin/login/store',[LoginController::class,'store']);
Route::get('admin/logout',[LoginController::class,'logout']);
Route::get('/admin/register',[LoginController::class,'create'])->name('register');
Route::post('admin/register',[LoginController::class,'register']);

Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        Route::prefix('categories')->group(function (){
            Route::get('list',[CategoryController::class,'index']);
            Route::get('create',[CategoryController::class,'create']);
            Route::post('create',[CategoryController::class,'store']);
            Route::get('edit/{category}',[CategoryController::class,'show']);
            Route::post('edit/{category}',[CategoryController::class,'update']);
            Route::get('delete/{id}',[CategoryController::class,'destroy']);
        });

        Route::prefix('products')->group(function (){
            Route::get('list',[ProductController::class,'index']);
            Route::get('create',[ProductController::class,'create']);
            Route::post('create',[ProductController::class,'store']);
            Route::get('detail/{product}',[ProductController::class,'detail']);
            Route::get('edit/{product}',[ProductController::class,'show']);
            Route::post('edit/{product}',[ProductController::class,'update']);
            Route::get('delete/{id}',[ProductController::class,'destroy']);
        });
    });
});



