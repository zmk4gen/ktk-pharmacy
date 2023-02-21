<?php

use App\Http\Controllers\Frontend\ProductsController as ProductBackend;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryGroupController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)
    ->group(function () {
        Route::get('/user_list', 'index')->name('user_list');
    });


Route::controller(ProductBackend::class)
    ->group(function () {
        // Route::get('/product', 'index')->name('product');
        Route::get('/product_list', 'product_list')->name('product_list');
    });

Route::controller(CategoryGroupController::class)
    ->group(function () {
        Route::get('/category_group_list', 'category_group_list')->name('category_group_list');
        Route::get('/category_group_create', 'create')->name('category_group_create');
        Route::post('/category_group_create', 'store')->name('category_group_store');
        Route::get('/category_group_edit/{category}', 'edit')->name('category_group_edit');
        Route::patch('/category_group_edit/{category}', 'update')->name('category_group_update');
        Route::delete('/category_group_delete/{category}', 'destroy')->name('category_group_destroy');
        Route::get('/category_group_export','export')->name('category_group_export');
        Route::post('/category_group_import','import')->name('category_group_import');
    });

Route::controller(CategoryController::class)
    ->group(function () {
        Route::get('/category_list', 'category_list')->name('category_list');
    });

Route::controller(BrandController::class)
    ->group(function () {
        Route::get('/brand_list', 'brand_list')->name('brand_list');
        Route::get('/brand_create', 'create')->name('brand_create');
        Route::post('/brand_create', 'store')->name('brand_store');
        Route::get('/brand_edit/{brand}', 'edit')->name('brand_edit');
        Route::patch('/brand_edit/{brand}', 'update')->name('brand_update');
        Route::delete('/brand_delete/{brand}', 'destroy')->name('brand_destroy');
    });
