<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
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
})->name('home');
 
Route::get('/about', [UserController::class, 'about'])->name('about');
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});
 
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');


    
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin/orders');
    Route::get('/admin/orders/create', [OrderController::class, 'create'])->name('admin/orders/create');
    Route::post('/admin/orders/store', [OrderController::class, 'store'])->name('admin/orders/store');
    Route::get('/admin/orders/show/{id}', [OrderController::class, 'show'])->name('admin/orders/show');
    Route::get('/admin/orders/edit/{id}', [OrderController::class, 'edit'])->name('admin/orders/edit');
    Route::put('/admin/orders/edit/{id}', [OrderController::class, 'update'])->name('admin/orders/update');
    Route::delete('/admin/orders/destroy/{id}', [OrderController::class, 'destroy'])->name('admin/orders/destroy');
});
// route shop
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Rute untuk memperbarui kuantitas item di keranjang
Route::patch('/carts/update/{id}', [CartController::class, 'update'])->name('update_cart');

// Rute untuk menghapus item dari keranjang
Route::delete('/carts/remove', [CartController::class, 'remove'])->name('remove_from_cart');

// Rute untuk melakukan checkout
Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::resource('orders', OrderController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');