<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('data',[AuthController::class,'index']);



Route::group(['middlewhere' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register_view'])->name('register');
    Route::post('register', [AuthController::class, 'store'])->name('store');
   
    // this is product 
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('addproduct', [ProductController::class, 'create'])->name('add-product');
    Route::post('addproduct', [ProductController::class, 'store'])->name('store');
    Route::get('productedit/{id}', [ProductController::class, 'edit'])->name('productedit');
    Route::put('product-update/{id}', [ProductController::class, 'update'])->name('product-update');
    Route::get('productdelete/{id}', [ProductController::class, 'destroy'])->name('pruductdelete');
    Route::get('productdetails/{id}', [ProductController::class, 'details'])->name('pruductdetails');
    
    
    // this is for product categpries 
    Route::get('categories', [CategoryController::class, 'index'])->name('index');
    Route::get('addcategory', [CategoryController::class, 'create'])->name('index');
    Route::post('addcategory', [CategoryController::class, 'store'])->name('store');
    Route::get('categoryedit/{id}', [CategoryController::class, 'edit'])->name('productedit');
    Route::put('categoryupdate/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('categorydelete/{id}', [CategoryController::class, 'destroy'])->name('delete');



});


Route::group(['middlewhere' => 'auth'], function () {
    Route::get('home', [AuthController::class, 'home'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('useredit/{id}', [UserController::class, 'edit'])->name('useredit');
    Route::put('update/{id}', [UserController::class, 'update'])->name('user-update');
});
