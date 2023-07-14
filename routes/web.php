<?php

use App\Http\Controllers\Admin\AdminHomepageController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColourController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\HomapageController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomapageController::class, 'index'])->name('website.homepage');

Route::prefix('/admin')->group(function () {
    Route::controller(AdminHomepageController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('admin.category');
        Route::get('/category/create', 'create')->name('admin.category.create');
        Route::post('/category', 'store')->name('admin.category.store');
        Route::get('/category/{category}/show', 'show')->name('admin.category.show');
        Route::get('/category/{category}/edit', 'edit')->name('admin.category.edit');
        Route::put('/category/{category}/', 'update')->name('admin.category.update');
        Route::get('/category/{category}/destroy', 'destroy')->name('admin.category.destroy');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('/brand-color', 'index')->name('admin.brand');
        Route::get('/brand/create', 'create')->name('admin.brand.create');
        Route::post('/brand', 'store')->name('admin.brand.store');
        Route::get('/brand/{brand}/show', 'show')->name('admin.brand.show');
        Route::get('/brand/{brand}/edit', 'edit')->name('admin.brand.edit');
        Route::put('/brand/{brand}/', 'update')->name('admin.brand.update');
        Route::get('/brand/{brand}/destroy', 'destroy')->name('admin.brand.destroy');
    });

    Route::controller(ColourController::class)->group(function () {
        Route::get('/brand-colour', 'index')->name('admin.colour');
        Route::get('/colour/create', 'create')->name('admin.colour.create');
        Route::post('/colour', 'store')->name('admin.colour.store');
        Route::get('/colour/{colour}/show', 'show')->name('admin.colour.show');
        Route::get('/colour/{colour}/edit', 'edit')->name('admin.colour.edit');
        Route::put('/colour/{colour}/', 'update')->name('admin.colour.update');
        Route::get('/colour/{colour}/destroy', 'destroy')->name('admin.colour.destroy');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('admin.product');
        Route::get('/product/create', 'create')->name('admin.product.create');
        Route::post('/product/', 'store')->name('admin.product.store');
    });
});
