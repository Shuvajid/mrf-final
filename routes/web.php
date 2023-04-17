<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarousalController;
use App\Http\Controllers\Authenticate;
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

/*Route::get('/', function () {
    return view('catt');
});*/


Route::get('/',[CustomerController::class,'viewpage'])->name('viewpage');
Route::get('/shop',[CustomerController::class,'shoppage'])->name('shoppage');
Route::get('/pro',[CustomerController::class,'propage'])->name('propage');
Route::get('/branddel',[CustomerController::class,'brandpage'])->name('brandpage');
Route::get('/about',[CustomerController::class,'aboutpage'])->name('aboutpage');
Route::get('/refund',[CustomerController::class,'refundpage'])->name('refundpage');
Route::get('/warranty',[CustomerController::class,'warrantypage'])->name('warrantypage');

Route::get('/search',[CustomerController::class,'search'])->name('search');


Route::get('/login',[Authenticate::class,'index'])->name('authenticate');
Route::post('/signin',[Authenticate::class,'signIn'])->name('signin');
Route::get('/signout',[Authenticate::class,'signOut'])->name('signout');

Route::resource('/product',ProductController::class);
Route::get('/product/show_details/{id}',[ProductController::class,'details'])->name('details');

Route::get('/product/show_pro/{id}',[ProductController::class,'pro'])->name('pro');
Route::get('/product/edit_pro/{model}',[ProductController::class,'edit'])->name('edit_pro');
Route::put('/product/update_pro/{model}',[ProductController::class,'update'])->name('update_pro');
Route::get('/product/delete/{model}',[ProductController::class,'destroy'])->name('pro_delete');

Route::resource('/carousal',CarousalController::class);
Route::get('/carousal/delete/{id}',[CarousalController::class,'destroy'])->name('carou_delete');

Route::resource('/category',CategoryController::class);
Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('cat_delete');

Route::resource('/offer',OfferController::class);
Route::get('/offer/delete/{id}',[OfferController::class,'destroy'])->name('off_delete');

Route::resource('/notice',NoticeController::class);
Route::get('/notice/delete/{id}',[NoticeController::class,'destroy'])->name('not_delete');

Route::resource('/brand',BrandController::class);
Route::get('/brand/delete/{id}',[BrandController::class,'destroy'])->name('brand_delete');

