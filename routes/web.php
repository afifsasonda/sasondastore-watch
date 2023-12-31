<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTableController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterPageController;
use App\Http\Controllers\UserController;
use Illuminate\SuppoDashboardTableController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/filter',[ProductController::class,'filter']);
Route::get('/about',[AboutController::class,'index']);

Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::get('/detail/{id}',[DetailController::class,'index'])->name('detail');

// dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
// dashboard product dan user
Route::get('/dashboard-table',[DashboardTableController::class,'index']);

// user
Route::get('/user',[UserController::class,'index']);
Route::get('/user-create',[UserController::class,'create']);
Route::post('/user-create-post',[UserController::class,'store']);
Route::get('/user-edit/{id}',[UserController::class,'edit']);
Route::put('/user-update',[UserController::class,'update']);
Route::get('/user-delete/{id}',[UserController::class,'delete']);

// product
Route::get('/product',[ProductController::class,'index']);
Route::get('/product-create',[ProductController::class,'create']);
Route::post('/product-create-post',[ProductController::class,'store']);
Route::get('/product-edit/{id}',[ProductController::class,'edit']);
Route::put('/product-update',[ProductController::class,'update']);
Route::put('/product-delete/{id}',[ProductController::class,'delete']);

// gallery products
Route::get('/product-gallery',[ProductGalleryController::class,'index']);
Route::get('/product-gallery-create',[ProductGalleryController::class,'create']);
Route::post('/product-gallery-create-post',[ProductGalleryController::class,'store']);
Route::get('/product-gallery-delete/{id}',[ProductGalleryController::class,'delete']);


// login
Route::get('/login',[LoginPageController::class,'index']);
Route::post('/login',[LoginPageController::class,'authenticate']);

// register
Route::get('/register',[RegisterPageController::class,'index']);
Route::post('/register-post',[RegisterPageController::class,'store']);

// logout
Route::get('/logout',[LoginPageController::class,'logout']);

// slider
Route::get('/banner-create',[DashboardTableController::class,'create']);
Route::post('/banner-create-post',[DashboardTableController::class,'store']);
Route::get('/banner-delete/{id}',[DashboardTableController::class,'delete']);

// profile
// Route::get('/profile',[ProfileController::class,'index']);
// Route::put('/profile-update',[ProfileController::class,'update']);
