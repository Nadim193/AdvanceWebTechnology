<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomePageController::class, 'home'])->name('home');
//product
Route::get('/product',[ProductController::class, 'productCreate'])->name('productcre');
Route::post('/product',[ProductController::class, 'productCreateSubmitted'])->name('productsub');
Route::get('/productlist',[ProductController::class, 'productlist'])->name('productlist');
//end product
Route::get('/ourteams', [HomePageController::class, 'ourteams'])->name('ourteams');
Route::get('/aboutus', [HomePageController::class, 'aboutus'])->name('aboutus');
Route::get('/contactusus', [HomePageController::class, 'contactus'])->name('contactus');