<?php

use App\Models\Contacts;
use App\Models\Kendaraan;
use App\Http\Controllers\tespesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDendaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\UserDashboardController;

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

//! Routing Homepage
Route::controller(HomepageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/project', 'project')->name('project');
    Route::get('/team', 'team')->name('team');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/detail/{kendaraan}', 'show')->middleware('auth')->name('detail.show');
    Route::get('/cart', 'cart')->middleware('auth')->name('cart');
    Route::get('/checkout', 'checkout')->middleware('auth')->name('checkout');
    Route::get('/onProcess', 'onProcess')->middleware('auth')->name('onProcess');
    Route::get('/history', 'history')->middleware('auth')->name('history');
    Route::get('/profile', 'profile')->middleware('auth')->name('profile');
    Route::post('/profile', 'update')->middleware('auth')->name('profile.update');
    Route::post('/return', 'pengembalian')->middleware('auth')->name('return');
    Route::get('/export/{id}', 'export')->middleware('auth')->name('export');
    Route::get('/exportOrder', 'exportOrder')->middleware('auth')->name('exportOrder');
    Route::get('/details/{id}', 'details')->middleware('auth')->name('details');
});
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');
Route::resource('/orderDetail', OrderDetailController::class)->names([
    'index' => 'orderDetail.index',
    'create' => 'orderDetail.create',
    'store' => 'orderDetail.store',
    'show' => 'orderDetail.show',
    'edit' => 'orderDetail.edit',
    'update' => 'orderDetail.update',
    'destroy' => 'orderDetail.destroy',
]);
Route::post('/checkout/{id}', [CheckoutController::class, 'store'])->name('checkout.store');
Route::resource('/testimoni', TestimoniController::class)->names([
    'index' => 'testimoni.index',
    'create' => 'testimoni.create',
    'store' => 'testimoni.store',
    'show' => 'testimoni.show',
    'edit' => 'testimoni.edit',
    'update' => 'testimoni.update',
    'destroy' => 'testimoni.destroy',
]);
Route::resource('/denda', DendaController::class)->names([
    'index' => 'denda.index',
    'create' => 'denda.create',
    'store' => 'denda.store',
    'show' => 'denda.show',
    'edit' => 'denda.edit',
    'update' => 'denda.update',
    'destroy' => 'denda.destroy',
]);

//! Routing Auth
Auth::routes();

//! Routing Dashboard
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/dashboard/bank', BankController::class)->names([
        'index' => 'dashboard.bank.index',
        'create' => 'dashboard.bank.create',
        'store' => 'dashboard.bank.store',
        'show' => 'dashboard.bank.show',
        'edit' => 'dashboard.bank.edit',
        'update' => 'dashboard.bank.update',
        'destroy' => 'dashboard.bank.destroy',
    ]);
    Route::resource('/dashboard/brand', BrandController::class)->names([
        'index' => 'dashboard.brand.index',
        'create' => 'dashboard.brand.create',
        'store' => 'dashboard.brand.store',
        'show' => 'dashboard.brand.show',
        'edit' => 'dashboard.brand.edit',
        'update' => 'dashboard.brand.update',
        'destroy' => 'dashboard.brand.destroy',
    ]);
    Route::resource('/dashboard/category', CategoryController::class)->names([
        'index' => 'dashboard.category.index',
        'create' => 'dashboard.category.create',
        'store' => 'dashboard.category.store',
        'show' => 'dashboard.category.show',
        'edit' => 'dashboard.category.edit',
        'update' => 'dashboard.category.update',
        'destroy' => 'dashboard.category.destroy',
    ]);
    Route::resource('/dashboard/type', TypeController::class)->names([
        'index' => 'dashboard.type.index',
        'create' => 'dashboard.type.create',
        'store' => 'dashboard.type.store',
        'show' => 'dashboard.type.show',
        'edit' => 'dashboard.type.edit',
        'update' => 'dashboard.type.update',
        'destroy' => 'dashboard.type.destroy',
    ]);
    Route::resource('/dashboard/kendaraan', KendaraanController::class)->names([
        'index' => 'dashboard.kendaraan.index',
        'create' => 'dashboard.kendaraan.create',
        'store' => 'dashboard.kendaraan.store',
        'show' => 'dashboard.kendaraan.show',
        'edit' => 'dashboard.kendaraan.edit',
        'update' => 'dashboard.kendaraan.update',
        'destroy' => 'dashboard.kendaraan.destroy',
    ]);
    Route::resource('/dashboard/contacts', ContactsController::class)->names([
        'index' => 'dashboard.contacts.index',
        'create' => 'dashboard.contacts.create',
        'store' => 'dashboard.contacts.store',
        'show' => 'dashboard.contacts.show',
        'edit' => 'dashboard.contacts.edit',
        'update' => 'dashboard.contacts.update',
        'destroy' => 'dashboard.contacts.destroy',
    ]);
    Route::resource('/dashboard/order', OrderController::class)->names([
        'index' => 'dashboard.order.index',
        'create' => 'dashboard.order.create',
        'store' => 'dashboard.order.store',
        'show' => 'dashboard.order.show',
        'edit' => 'dashboard.order.edit',
        'update' => 'dashboard.order.update',
        'destroy' => 'dashboard.order.destroy',
    ]);
    Route::resource('/dashboard/user', UserDashboardController::class)->names([
        'index' => 'dashboard.user.index',
        'create' => 'dashboard.user.create',
        'store' => 'dashboard.user.store',
        'show' => 'dashboard.user.show',
        'edit' => 'dashboard.user.edit',
        'update' => 'dashboard.user.update',
        'destroy' => 'dashboard.user.destroy',
    ]);
    Route::resource('/dashboard/denda', DashboardDendaController::class)->names([
        'index' => 'dashboard.denda.index',
        'create' => 'dashboard.denda.create',
        'store' => 'dashboard.denda.store',
        'show' => 'dashboard.denda.show',
        'edit' => 'dashboard.denda.edit',
        'update' => 'dashboard.denda.update',
        'destroy' => 'dashboard.denda.destroy',
    ]);
    Route::resource('/dashboard/pengembalian', PengembalianController::class)->names([
        'index' => 'dashboard.pengembalian.index',
        'create' => 'dashboard.pengembalian.create',
        'store' => 'dashboard.pengembalian.store',
        'show' => 'dashboard.pengembalian.show',
        'edit' => 'dashboard.pengembalian.edit',
        'update' => 'dashboard.pengembalian.update',
        'destroy' => 'dashboard.pengembalian.destroy',
    ]);
    Route::get('/order/pdf', [OrderController::class, 'cetak_pdf'])->name('order.pdf');
    Route::get('/return/pdf', [PengembalianController::class, 'cetak_pdf'])->name('return.pdf');
    Route::get('/cetak/denda', [DashboardDendaController::class, 'cetak_pdf'])->name('denda.pdf');
});
