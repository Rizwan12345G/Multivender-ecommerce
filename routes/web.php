<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Models\Customer;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->check()) {
            $userType = auth()->user()->user_type;

            switch ($userType) {
                case 'admin':

                    return redirect()->route('Admin.dashboard');
                case 'vendor':

                    return redirect()->route('vendor.dashboard');
                case 'customer':

                    return redirect()->route('customer.dashboard');
                default:
                    return route('/');
            }
        }
    })->name('dashboard');
});




Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);



// Customer Dashboard
Route::middleware(['auth', 'verified', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
    // Add more customer-specific routes here
});

// Vendor Dashboard
Route::middleware(['auth', 'verified', 'role:vendor'])->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
});


// Admin Dashboard
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {


    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('Admin.dashboard');

    //category routes
    Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category.all');
    Route::get('admin/category/show', [CategoryController::class, 'create'])->name('admin.category.show');
    Route::post('admin/category/add', [CategoryController::class, 'store'])->name('admin.category.add');
    Route::get('admin/category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('admin/category/edit/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('admin/category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

    // products detol rotes
    Route::get('admin/product/show',  [ProductController::class, 'create'])->name('admin.product.show');
    Route::get('admin/product/all',  [ProductController::class, 'index'])->name('admin.product.all');
    Route::Post('admin/product/add',  [ProductController::class, 'store'])->name('admin.product.store');
    Route::put('admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');

    Route::delete('admin/product/{product}', [ProductController::class, 'destroy'])->name('admin.product.delete');
    Route::get('admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
});
