<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PrincipalController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PrincipalProductController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ManarController;
use App\Http\Controllers\Admin\CompanyManagerController;
use App\Http\Controllers\Front\FrontController;


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
    return view('front.index');
});
// Route::get('/', function () {
//     return redirect('login');
// });


Auth::routes(['register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontController::class,'index'])->name('front.home');
Route::get('/about-us', [FrontController::class,'about'])->name('front.about-us');
Route::get('/contact', [FrontController::class,'contact'])->name('front.contact');
Route::get('/product/{id}', [FrontController::class,'categorylWiseProduct'])->name('front.category.product');
// Route::get('/principal', [FrontController::class,'principal'])->name('front.principal');
Route::get('/principal/{id}', [FrontController::class,'principalWiseProduct'])->name('front.principal.product');
Route::get('/principal-details/{id}', [FrontController::class,'ProductDetails'])->name('front.product.details');



Route::group(['middleware' => 'auth'],function(){
    Route::get('user/profile', [HomeController::class,'userProfile'])->name('user.profile');
    Route::post('user/profile', [HomeController::class,'userProfileSave'])->name('user.profile.save');
    // Route::get('user/change/password','HomeController@changePassword')->name('user.changepassword');
    Route::post('user/change/password', [HomeController::class,'updateUserPassword'])->name('user.changepassword.save');

});

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    // require 'custom/admin.php';
    Route::get('dashboard',function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

// -----------------Category-----------------
    Route::get('/category', [CategoryController::class,'index'])->name('category.view');
    Route::get('/category/add', [CategoryController::class,'create'])->name('add.category');
    Route::post('/category/add', [CategoryController::class,'store'])->name('add.category');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('edit.category');
    Route::put('/category/update/{id}', [CategoryController::class,'update'])->name('update.category');
    Route::get('/category/delete/{id}', [CategoryController::class,'destroy'])->name('delete.category');

    // ----------------------Principals------------
    Route::get('/principal', [PrincipalController::class,'index'])->name('principal.view');
    Route::get('/principal/add', [PrincipalController::class,'create'])->name('add.principal');
    Route::post('/principal/add', [PrincipalController::class,'store'])->name('add.principal');
    Route::get('/principal/edit/{id}', [PrincipalController::class,'edit'])->name('edit.principal');
    Route::put('/principal/update/{id}', [PrincipalController::class,'update'])->name('update.principal');
    Route::get('/principal/delete/{id}', [PrincipalController::class,'destroy'])->name('delete.principal');

    // ---------------Product----------------------
    Route::get('/product', [ProductController::class,'index'])->name('product.view');
    Route::get('/product/add', [ProductController::class,'create'])->name('add.product');
    Route::post('/product/add', [ProductController::class,'store'])->name('add.product');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('edit.product');
    Route::put('/product/update/{id}', [ProductController::class,'update'])->name('update.product');
    Route::get('/product/delete/{id}', [ProductController::class,'destroy'])->name('delete.product');

    // ----------------Principal Product--------------
    
    Route::get('/principal-product', [PrincipalProductController::class,'index'])->name('principal.product.view');
    Route::get('/principal-product/add', [PrincipalProductController::class,'create'])->name('add.principal.product');
    Route::post('/principal-product/add', [PrincipalProductController::class,'store'])->name('add.principal.product');
    Route::get('/principal-product/edit/{id}', [PrincipalProductController::class,'edit'])->name('edit.principal.product');
    Route::put('/principal-product/update/{id}', [PrincipalProductController::class,'update'])->name('update.principal.product');
    Route::get('/principal-product/delete/{id}', [PrincipalProductController::class,'destroy'])->name('delete.principal.product');

     // ---------------Product----------------------
    Route::get('/video', [VideoController::class,'index'])->name('video.view');
    Route::get('/video/add', [VideoController::class,'create'])->name('add.video');
    Route::post('/video/add', [VideoController::class,'store'])->name('add.video');
    Route::get('/video/edit/{id}', [VideoController::class,'edit'])->name('edit.video');
    Route::put('/video/update/{id}', [VideoController::class,'update'])->name('update.video');
    Route::get('/video/delete/{id}', [VideoController::class,'destroy'])->name('delete.video');

     // ---------------Product----------------------
    Route::get('/manar', [ManarController::class,'index'])->name('manar.view');
    Route::get('/manar/add', [ManarController::class,'create'])->name('add.manar');
    Route::post('/manar/add', [ManarController::class,'store'])->name('add.manar');
    Route::get('/manar/edit/{id}', [ManarController::class,'edit'])->name('edit.manar');
    Route::put('/manar/update/{id}', [ManarController::class,'update'])->name('update.manar');
    Route::get('/manar/delete/{id}', [ManarController::class,'destroy'])->name('delete.manar');

     // ---------------Product----------------------
    Route::get('/company-manager', [CompanyManagerController::class,'index'])->name('company.manager.view');
    Route::get('/company-manager/add', [CompanyManagerController::class,'create'])->name('add.company.manager');
    Route::post('/company-manager/add', [CompanyManagerController::class,'store'])->name('add.company.manager');
    Route::get('/company-manager/edit/{id}', [CompanyManagerController::class,'edit'])->name('edit.company.manager');
    Route::put('/company-manager/update/{id}', [CompanyManagerController::class,'update'])->name('update.company.manager');
    Route::get('/company-manager/delete/{id}', [CompanyManagerController::class,'destroy'])->name('delete.company.manager');
});



Route::group(['prefix'=>'salse','middleware'=>'salse'],function(){
    // require 'custom/admin.php';
    Route::get('dashboard',function(){
        return view('salse.dashboard');
    })->name('salse.dashboard');
});

Route::group(['prefix'=>'service','middleware'=>'service'],function(){
    // require 'custom/admin.php';
    Route::get('dashboard',function(){
        return view('service.dashboard');
    })->name('service.dashboard');
});

 