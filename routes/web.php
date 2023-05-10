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


// Route::get('/', function () {
//     return view('front.home');
// })->name('index');


// Route::get('/news', function () {
//     return view('front.news');
// });

Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/about', function () {
    return view('front.clean');
});


///web
Route::get ('/store',[WebController::class,'products'])->name('store');
Route::get ('/category/{id}',[WebController::class,'allproduct'])->name('allproduct');

Route::get ('/store/{id}',[WebController::class,'products'])->name('store');

Route::any ('/showProduct/{id}',[WebController::class,'showProduct'])->name('showProduct');
Route::post ('/getPriceSize/{id}',[WebController::class,'getPriceSize'])->name('getPriceSize');


///end web

//card
Route::get ('/card',[Cardcontroller::class,'index'])->name('card');
Route::get ('/totalCards',[Cardcontroller::class,'totalCards'])->name('totalCards');

Route::post ('/card/store',[Cardcontroller::class,'store'])->name('card.store');
Route::post ('/card/update/{id}',[Cardcontroller::class,'update'])->name('card.update');

Route::get ('/card/destroy/{id}',[Cardcontroller::class,'destroy'])->name('card.destroy');

///end card

///save order for web site

Route::post ('/order/createorder',[OrderController::class,'createorder'])->name('createorder');
Route::post ('/order/store',[OrderController::class,'store'])->name('order.store');

Route::get('/news', [HomeController::class,'blogs'])->name('news');

////end save order
Auth::routes();


//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::get('/', [HomeController::class,'index'])->name('home');
 Route::get('/{category}', [HomeController::class,'showProducts'])->name('products');
 Route::get('/store/{id}', [HomeController::class,'show'])->name('show');
 Route::get('/news/{id}', [HomeController::class,'blogDetails'])->name('news.details');





 ////
 Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
