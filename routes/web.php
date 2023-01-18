<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\Admin\DashboardController as DashboardAdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryAdminController;
use App\Http\Controllers\Admin\UserController as UserAdminController;
use App\Http\Controllers\Admin\ProductController as ProductAdminController;
use App\Http\Controllers\Admin\ProductGalleryController as ProductGalleryAdminController;

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

// Route::get('/debug-sentry', function () {
//     throw new Exception('My first Sentry error!');
// });


// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('categories-detail');
Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/details/{id}', [DetailController::class, 'add'])->name('detail-add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/success', [CartController::class, 'success'])->name('success');

Route::get('/register/success', [RegisterController::class, 'success'])->name('register-success');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])
    ->name('dashboard-product');
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create'])
    ->name('dashboard-product-create');
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'details'])
    ->name('dashboard-product-details');


Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index'])
    ->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', [DashboardTransactionController::class, 'details'])
    ->name('dashboard-transactiondetails');

Route::get('/dashboard/settings', [DashboardSettingController::class, 'store'])
    ->name('store-settings-store');
Route::get('/dashboard/account', [DashboardSettingController::class, 'account'])
    ->name('store-settings-account');


// ->middleware(['auth', 'admin'])
Route::prefix('admin')->group(function(){
        Route::get('/', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
        Route::resource('category', CategoryAdminController::class);
        Route::resource('user', UserAdminController::class);
        Route::resource('product', ProductAdminController::class);
        Route::resource('product-gallery', ProductGalleryAdminController::class);
});



Auth::routes();
