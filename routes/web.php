<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\EmailController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripePaymentController;


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



Route::get('/',[HomeController::class,'index']);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth'
,'verified');

Route::post('/addcart/{id}',[HomeController::class,'addcart'])->name('addcart');

Route::get('/showcart',[HomeController::class,'showcart'])->name('showcart');
Route::delete('/deletecart/{id}',[HomeController::class,'deletecart'])->name('deletecart');
Route::get('/showorder',[HomeController::class,'showorder'])->name('showorder');
Route::get('/proddetails/{id}',[HomeController::class,'proddetails'])->name('proddetails');
Route::get('/printpdf/{id}',[HomeController::class,'printpdf'])->name('printpdf');
Route::post('/addcomment',[HomeController::class,'addcomment'])->name('addcomment');
Route::post('/addreply',[HomeController::class,'addreply'])->name('addreply');


Route::get('/sendemail/{id}',[EmailController::class,'sendemail'])->name('sendemail');
Route::post('/send_user_email/{id}',[EmailController::class,'send_user_email'])->name('send_user_email');

Route::get('/searchorder',[SearchController::class,'searchorder'])->name('searchorder');









Route::resource('/category',CategoryController::class);
Route::resource('/product',ProductController::class);


Route::resource('/order',OrderController::class);



Route::get('/stripe/{totalprice}',[HomeController::class,'stripe'])->name('stripe');
Route::post('/stripe/{totalprice}',[HomeController::class,'stripepost'])->name('stripe.post');





