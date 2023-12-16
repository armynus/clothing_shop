<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;

Route::get('/',[ProductController::class, 'indexhome'])->name('indexhome');
Route::get('/nam',[ProductController::class, 'nam'])->name('nam');
Route::get('/nu',[ProductController::class, 'nu'])->name('nu');
Route::get('/treem',[ProductController::class, 'treem'])->name('treem');
Route::get('/detail_product/{id}',[ProductController::class, 'detail_product'])->name('detail_product');

Route::get('/admin',[ProductController::class, 'admin'])->name('admin.index');
Route::get('/create',[ProductController::class, 'create'])-> name('create');

Route::post('/store',[ProductController::class, 'store'])-> name('product.store');
Route::get('/edit/{each}',[ProductController::class, 'edit'])->name('edit');
Route::put('/edit/{product}',[ProductController::class, 'update'])-> name('product.update');
Route::delete('/destroy/{each}',[ProductController::class, 'destroy'])-> name('product.destroy');
// Route::delete('/admin',[ProductController::class, 'admin'])->name('admin.index');

// Route::resource('', ProductController::class)->except('show');  //chưa có show nên ngoại trừ

// Route::group(['prefix' =>'course', 'as' => 'course.' ], function(){
//     Route::get('/',[CourseController::class, 'index'])-> name('index');
//     Route::get('/create',[CourseController::class, 'create'])-> name('create');
//     Route::post('/store',[CourseController::class, 'store'])-> name('store');
//     Route::delete('/destroy/{course}',[CourseController::class, 'destroy'])-> name('destroy');
//     Route::get('/edit/{course}',[CourseController::class, 'edit'])-> name('edit');
//     Route::put('/edit/{course}',[CourseController::class, 'update'])-> name('update');

// });