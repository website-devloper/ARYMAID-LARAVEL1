<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CostumAuthController;
use App\Http\Controllers\wishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CheckOutController;



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

Route::get('/',[HomeController::class,'Home']);

Route::get('/products',[ProduitsController::class,'index']);

Route::get('/products/{categorie}',[ProduitsController::class,'ProductsBycategorie']);

Route::get('/products/search',[ProduitsController::class,'ProductsBysearch']);



Route::get('/about', [HomeController::class,'About']);

Route::get('/contact',[HomeController::class,'Contact']);

Route::get('/signin-modal',[HomeController::class,'SigninModal']);

Route::get('/checkout',[HomeController::class,'Checkout']);

Route::get('/postLogin',[CostumAuthController::class,'Login'])->name('postLogin');

Route::post('/postRegister',[CostumAuthController::class,'Register'])->name('postRegister');

Route::get('/logOut',[CostumAuthController::class,'LogOut'])->name('LogOut');
// WISHLIST ROUTES------------------------------

Route::get('/wishlist/{user}/products',[wishlistController::class,'index']);

Route::get('/wishlist/{idProduct}',[wishlistController::class,'store']);

Route::get('/deleteWishlist/{idProduct}',[wishlistController::class,'destroy']);

// END WISHLIST ROUTES---------------------------------

//CART ROUTES-----------------------------------------------

Route::get('/cart/{user}/products',[CartController::class,'index']);

Route::get('/cart/{idProduct}',[CartController::class,'store']);

Route::get('/deleteCart/{idProduct}',[CartController::class,'destroy']);

// END CART ROUTES---------------------------------------------

// CHECKOUT ROUTES---------------------------------------------


Route::get('/checkout',[CheckOutController::class,'index']);
Route::get('/checkout/store',[CheckOutController::class,'CheckOut']);


// END CHECKOUT ROUTES---------------------------------------------


Route::get('/singleProduct/{id}',[ProduitsController::class,'show']);
