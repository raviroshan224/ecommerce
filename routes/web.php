<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::get("/", [Controller::class, 'welcome'])->name('welcome');

//------------------------------------------------------user--------------------------------------


Route::get("/user/signup", [UserController::class, 'register'])->name('signup');
Route::get("/user/login", [UserController::class, 'login'])->name('login');
Route::post("/user/signup", [UserController::class, 'signup']);
Route::post("/user/login", [UserController::class, 'signin']);
Route::get("/user/logout", [UserController::class, 'logout'])->name('logout');

Route::get("/home", [HomeController::class, 'home'])->name('home')->middleware(['auth:user']);
Route::get("/products", [HomeController::class, 'shop'])->name('shop')->middleware(['auth:user']);
Route::get("/user/profile", [HomeController::class, 'profile'])->name('profile')->middleware(['auth:user']);
Route::get('/cart', [CartController::class, 'viewcart'])->name('cart')->middleware(['auth:user']);
Route::get('/user/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::delete('/user/cart/{id}', [CartController::class, 'destroy'])->name('delete');


Route::get('/product/{id}', [OrderController::class, 'Order'])->name('order');
Route::post('/product/', [OrderController::class, 'ordernow'])->name('ordernow');

//------------------------------------------------------admin--------------------------------------




Route::get("/admin/signup", [AdminController::class, 'register'])->name('admin.signup');
Route::get("/admin/login", [AdminController::class, 'login'])->name('admin.login');
Route::get("/admin/logout", [AdminController::class, 'logout'])->name('admin.logout');


Route::post("/admin/signup", [AdminController::class, 'signup'])->name('admin.store.signup');
Route::post("/admin/login", [AdminController::class, 'signin'])->name('admin.store.login');

Route::get('/admin/home', [ProductController::class, 'home'])->name('admin.home')->middleware(['auth:admin']);
Route::post('/admin/home', [ProductController::class, 'create'])->middleware(['auth:admin']);

Route::get('/admin/products', [AdminController::class, 'product'])->name('admin.product')->middleware(['auth:admin']);
Route::get('/admin/users', [AdminController::class, 'user'])->name('admin.user')->middleware(['auth:admin']);
