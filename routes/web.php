<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Cardcontroller;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\HomeController;


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


// Route::any('/', function () {
//     return view('front.home');
// })->name('index');


// Route::any('/news', function () {
//     return view('front.news');
// });

Route::any('/contact', function () {
    return view('front.contact');
});
Route::any('/about', function () {
    return view('front.clean');
});


///web
Route::any ('/store',[WebController::class,'products'])->name('store');
Route::any ('/category/{id}',[WebController::class,'allproduct'])->name('allproduct');

Route::any ('/store/{id}',[WebController::class,'products'])->name('store');

Route::any ('/showProduct/{id}',[WebController::class,'showProduct'])->name('showProduct');
Route::post ('/getPriceSize/{id}',[WebController::class,'getPriceSize'])->name('getPriceSize');


///end web

//card
Route::any ('/card',[Cardcontroller::class,'index'])->name('card');
Route::any ('/totalCards',[Cardcontroller::class,'totalCards'])->name('totalCards');

Route::post ('/card/store',[Cardcontroller::class,'store'])->name('card.store');
Route::post ('/card/update/{id}',[Cardcontroller::class,'update'])->name('card.update');

Route::any ('/card/destroy/{id}',[Cardcontroller::class,'destroy'])->name('card.destroy');

///end card

///save order for web site

Route::any ('/order/createorder',[OrderController::class,'createorder'])->name('createorder');
Route::post ('/order/store',[OrderController::class,'store'])->name('order.store');

Route::any('/news', [HomeController::class,'blogs'])->name('news');

////end save order
Auth::routes();


//  Route::any('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::any('/', [HomeController::class,'index'])->name('home');
 Route::any('/{category}', [HomeController::class,'showProducts'])->name('products');
 Route::any('/store/{id}', [HomeController::class,'show'])->name('show');
 Route::any('/news/{id}', [HomeController::class,'blogDetails'])->name('news.details');





 ////
 Route::any('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
