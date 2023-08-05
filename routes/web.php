<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Color\ColorController;
use App\Http\Controllers\Admin\Slider\SliderController;
use App\Http\Controllers\Admin\Approve\ApproveController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Frontend\Home\FrontendController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Coupens\CoupensController;
use App\Http\Controllers\Admin\Home\AdminHomepageController;
use App\Http\Controllers\Admin\Offers\OffersController;
use App\Http\Controllers\Admin\Promotions\PromotionsController;
use App\Http\Controllers\Admin\Users\UsersContoller;

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

Route::prefix('/')->group(function () {
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'index')->name('frontend.index');
        Route::get('/collections/{category_slug}/', 'product')->name('frontend.product.index');
    });
});


Route::prefix('/admin')->middleware('auth', 'isAdmin')->group(function () {
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
        Route::get('/category/{category}/activate', 'activate')->name('admin.category.activate');
        Route::get('/category/{category}/dectivate', 'dectivate')->name('admin.category.dectivate');
    });

    Route::controller(ColorController::class)->group(function () {
        Route::get('/color-brand', 'index')->name('admin.color-brand');
        Route::get('/color/create', 'create')->name('admin.color.create');
        Route::post('/color', 'store')->name('admin.color.store');
        Route::get('/color/{color}/show', 'show')->name('admin.color.show');
        Route::get('/color/{color}/edit', 'edit')->name('admin.color.edit');
        Route::put('/color/{color}/', 'update')->name('admin.color.update');
        Route::get('/color/{color}/destroy', 'destroy')->name('admin.color.destroy');
        Route::get('/color/{color}/activate', 'activate')->name('admin.color.activate');
        Route::get('/color/{color}/dectivate', 'dectivate')->name('admin.color.dectivate');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('/color-brand', 'index')->name('admin.color-brand');
        Route::get('/brand/create', 'create')->name('admin.brand.create');
        Route::post('/brand/', 'save')->name('admin.brand.save');
        Route::get('/brand/{brand}/show', 'show')->name('admin.brand.show');
        Route::get('/brand/{brand}/edit', 'edit')->name('admin.brand.edit');
        Route::put('/brand/{brand}/', 'update')->name('admin.brand.update');
        Route::get('/brand/{brand}/destroy', 'destroy')->name('admin.brand.destroy');
        Route::get('/brand/{brand}/activate', 'activate')->name('admin.brand.activate');
        Route::get('/brand/{brand}/dectivate', 'dectivate')->name('admin.brand.dectivate');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('admin.product');
        Route::get('/product/create', 'create')->name('admin.product.create');
        Route::post('/product/', 'store')->name('admin.product.store');
        Route::get('/product/{product}/show', 'show')->name('admin.product.show');
        Route::get('/product/{product}/edit', 'edit')->name('admin.product.edit');
        Route::put('/product/{product}/', 'update')->name('admin.product.update');
        Route::get('/product/{product}/destroy', 'destroy')->name('admin.product.destroy');
        Route::get('/product-image/{product}/delete', 'destroyImage')->name('admin.product.product.image');
        Route::get('/product/{product}/activate', 'activate')->name('admin.product.activate');
        Route::get('/product/{product}/dectivate', 'dectivate')->name('admin.product.dectivate');
    });

    Route::controller(SliderController::class)->group(function () {
        Route::get('/slider', 'index')->name('admin.slider');
        Route::get('/slider/create', 'create')->name('admin.slider.create');
        Route::post('/slider/', 'store')->name('admin.slider.store');
        Route::get('/slider/{slider}/show', 'show')->name('admin.slider.show');
        Route::get('/slider/{slider}/edit', 'edit')->name('admin.slider.edit');
        Route::put('/slider/{slider}/', 'update')->name('admin.slider.update');
        Route::get('/slider/{slider}/destroy', 'destroy')->name('admin.slider.destroy');
        Route::get('/slider/{slider}/activate', 'activate')->name('admin.slider.activate');
        Route::get('/slider/{slider}/dectivate', 'dectivate')->name('admin.slider.dectivate');
    });

    Route::controller(PromotionsController::class)->group(function () {
        Route::get('/promotions', 'index')->name('admin.promotions');
    });

    Route::controller(OffersController::class)->group(function () {
        Route::get('/offers', 'index')->name('admin.offers');
    });

    Route::controller(CoupensController::class)->group(function () {
        Route::get('/coupens', 'index')->name('admin.coupens');
    });

    Route::controller(UsersContoller::class)->group(function () {
        Route::get('/users', 'index')->name('admin.users');
        Route::get('/user/{user}/show', 'show')->name('admin.user.show');
    });

    Route::controller(ApproveController::class)->group(function () {
        Route::get('/approval-stages', 'index')->name('admin.approval-stages');
        Route::get('/approval/{category}/category_approval', 'category_approval')->name('category_approval');
        Route::get('/approval/{color}/color_approval', 'color_approval')->name('color_approval');
        Route::get('/approval/{brand}/brand_approval', 'brand_approval')->name('brand_approval');
        Route::get('/approval/{brand}/product_approval', 'product_approval')->name('product_approval');
        Route::get('/approval/{brand}/slider_approval', 'slider_approval')->name('slider_approval');
    });
});