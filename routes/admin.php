<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ProductSizeController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\UserController;
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

// Route::get('/', function () {
//     return view('admin.index');
// });

Route::get('/index', [IndexController::class, 'index'])->name('admin');
    Route::get('/settings', function () {
        return view('admin.settings');
});
Route::put('/settings/{setting}/update',
[SettingController::class, 'update'])
->name('admin.settings.update');
Route::get('settings',[SettingController::class,"index"])->name('dashboard.settings.index');

// Route::controller(ImageController::class)->group(function(){
//     Route::get('/image-upload', 'index')->name('image.form');
//     Route::post('/upload-image', 'storeImage')->name('image.store');
// });


Route::get('/users', function () {
    return view('admin.Users.allUsers');
});

// user Routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/dashboard/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/dashboard/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/dashboard/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Blog Routes
Route::get('/dashboard/posts', [BlogController::class, 'index'])->name('posts.index');
Route::get('/dashboard/addPost', [BlogController::class, 'create'])->name('posts.create');
Route::post('/dashboard/posts', [BlogController::class, 'store'])->name('posts.store');
Route::get('/dashboard/posts/edit/{id}', [BlogController::class, 'edit'])->name('posts.edit');
Route::post('/dashboard/posts/update/{id}', [BlogController::class, 'update'])->name('posts.update');
Route::get('/dashboard/poposts/{id}', [BlogController::class, 'destroy'])->name('posts.destroy');

//product
Route::get('product',[ProductController::class,'index'])->name('product');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');

//productSize
Route::get('productSize',[ProductSizeController::class,'index'])->name('productSize');
Route::get('productSize/create/{id}',[ProductSizeController::class,'create'])->name('productSize.create');
Route::post('productSize/store',[ProductSizeController::class,'store'])->name('productSize.store');



// orders Routes
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/details', [OrderdetailsController::class, 'getorder'])->name('orders.details');

Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders/store', [OrderController::class, 'storeDashboardOrder'])->name('orders.store');

Route::get('/update/status/{id}/{status}', [OrderController::class, 'updateStatus'])->name('update.status');

// Route::put('/settings/{id}/update', [SettingController::class, 'update'])->name('admin.settings.update');
