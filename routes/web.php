<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/components', [PageController::class, 'components'])->name('components');
Route::get('/404', [PageController::class, 'fourOhFour'])->name('404');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/login-register', [PageController::class, 'login_register'])->name('login-register');

Route::get('/users', [UserController::class, 'index']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
//Route::get('/products/{product}', [ProductController::class, 'show'])->name('product');
// Modify later for route model binding
Route::get('/product', [ProductController::class, 'show'])->name('product');

Route::get('/orders', [OrderController::class, 'index']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);

Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::get('/my-account', [ShopController::class, 'my_account'])->name('my-account');
Route::get('/shopping-cart', [ShopController::class, 'shopping_cart'])->name('shopping-cart');

