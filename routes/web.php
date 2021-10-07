<?php
// namespace App\Http\Controllers\Admin;
// use Route,Auth;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\PrincipalController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PrincipalProductController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\BanarController;
use App\Http\Controllers\Admin\CompanyManagerController;
use App\Http\Controllers\Admin\AboutCompanyController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ContactDetailsController;


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
Route::post('/contact/report/add', [FrontController::class,'addContactUsReport'])->name('add.contact.report');

Route::get('/product/{id}', [FrontController::class,'categorylWiseProduct'])->name('front.category.product');
// Route::get('/principal', [FrontController::class,'principal'])->name('front.principal');
Route::get('/principal/{id}', [FrontController::class,'principalWiseProduct'])->name('front.principal.product');
Route::get('/product-details/{id}', [FrontController::class,'ProductDetails'])->name('front.product.details');
Route::get('/principal-details/{id}', [FrontController::class,'PrincipalDetails'])->name('front.principal.product.details');


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
    Route::post('/category/add', [CategoryController::class,'store'])->name('store.category');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('edit.category');
    Route::put('/category/update/{id}', [CategoryController::class,'update'])->name('update.category');
    Route::get('/category/delete/{id}', [CategoryController::class,'destroy'])->name('delete.category');

    // -----------------Sub Category-----------------
    Route::get('/sub-category', [SubCategoryController::class,'index'])->name('sub-category.view');
    Route::post('/get-sub-category-by-category', [SubCategoryController::class,'subCategory']);

    Route::get('/sub-category/add', [SubCategoryController::class,'create'])->name('add.sub-category');
    Route::post('/sub-category/add', [SubCategoryController::class,'store'])->name('store.sub-category');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class,'edit'])->name('edit.sub-category');
    Route::put('/sub-category/update/{id}', [SubCategoryController::class,'update'])->name('update.sub-category');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class,'destroy'])->name('delete.sub-category');
    
    
    // ----------------------Principals------------
    Route::get('/principal', [PrincipalController::class,'index'])->name('principal.view');
    Route::get('/principal/add', [PrincipalController::class,'create'])->name('add.principal');
    Route::post('/principal/add', [PrincipalController::class,'store'])->name('store.principal');
    Route::get('/principal/edit/{id}', [PrincipalController::class,'edit'])->name('edit.principal');
    Route::put('/principal/update/{id}', [PrincipalController::class,'update'])->name('update.principal');
    Route::get('/principal/delete/{id}', [PrincipalController::class,'destroy'])->name('delete.principal');

    // ---------------Product----------------------
    Route::get('/product', [ProductController::class,'index'])->name('product.view');
    Route::get('/product/add', [ProductController::class,'create'])->name('add.product');
    Route::post('/product/add', [ProductController::class,'store'])->name('store.product');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('edit.product');
    Route::put('/product/update/{id}', [ProductController::class,'update'])->name('update.product');
    Route::get('/product/delete/{id}', [ProductController::class,'destroy'])->name('delete.product');

    // ----------------Principal Product--------------
    
    Route::get('/principal-product', [PrincipalProductController::class,'index'])->name('principal.product.view');
    Route::get('/principal-product/add', [PrincipalProductController::class,'create'])->name('add.principal.product');
    Route::post('/principal-product/add', [PrincipalProductController::class,'store'])->name('store.principal.product');
    Route::get('/principal-product/edit/{id}', [PrincipalProductController::class,'edit'])->name('edit.principal.product');
    Route::put('/principal-product/update/{id}', [PrincipalProductController::class,'update'])->name('update.principal.product');
    Route::get('/principal-product/delete/{id}', [PrincipalProductController::class,'destroy'])->name('delete.principal.product');

     // ---------------Product----------------------
    Route::get('/video', [VideoController::class,'index'])->name('video.view');
    Route::get('/video/add', [VideoController::class,'create'])->name('add.video');
    Route::post('/video/add', [VideoController::class,'store'])->name('store.video');
    Route::get('/video/edit/{id}', [VideoController::class,'edit'])->name('edit.video');
    Route::put('/video/update/{id}', [VideoController::class,'update'])->name('update.video');
    Route::get('/video/delete/{id}', [VideoController::class,'destroy'])->name('delete.video');

     // ---------------Product----------------------
    Route::get('/banner', [BanarController::class,'index'])->name('banar.view');
    Route::get('/banner/add', [BanarController::class,'create'])->name('add.banar');
    Route::post('/banner/add', [BanarController::class,'store'])->name('store.banar');
    Route::get('/banner/edit/{id}', [BanarController::class,'edit'])->name('edit.banar');
    Route::put('/banner/update/{id}', [BanarController::class,'update'])->name('update.banar');
    Route::get('/banner/delete/{id}', [BanarController::class,'destroy'])->name('delete.banar');

     // ---------------Company Manager----------------------
    Route::get('/company-manager', [CompanyManagerController::class,'index'])->name('company.manager.view');
    Route::get('/company-manager/add', [CompanyManagerController::class,'create'])->name('add.company.manager');
    Route::post('/company-manager/add', [CompanyManagerController::class,'store'])->name('store.company.manager');
    Route::get('/company-manager/edit/{id}', [CompanyManagerController::class,'edit'])->name('edit.company.manager');
    Route::put('/company-manager/update/{id}', [CompanyManagerController::class,'update'])->name('update.company.manager');
    Route::get('/company-manager/delete/{id}', [CompanyManagerController::class,'destroy'])->name('delete.company.manager');

    // ------------------------About Company-----------------------------
    Route::get('/about-company', [AboutCompanyController::class,'index'])->name('about.company.view');
    Route::get('/about-company/add', [AboutCompanyController::class,'create'])->name('add.about.company');
    Route::post('/about-company/add', [AboutCompanyController::class,'store'])->name('store.about.company');
    Route::get('/about-company/edit/{id}', [AboutCompanyController::class,'edit'])->name('edit.about.company');
    Route::put('/about-company/update/{id}', [AboutCompanyController::class,'update'])->name('update.about.company');
    Route::get('/about-company/delete/{id}', [AboutCompanyController::class,'destroy'])->name('delete.about.company');


     // ------------------------About Us-----------------------------
     Route::get('/about_us', [AboutUsController::class,'index'])->name('about_us.view');
     Route::get('/about_us/add', [AboutUsController::class,'create'])->name('add.about_us');
     Route::post('/about_us/add', [AboutUsController::class,'store'])->name('store.about_us');
     Route::get('/about_us/edit/{id}', [AboutUsController::class,'edit'])->name('edit.about_us');
     Route::put('/about_us/update/{id}', [AboutUsController::class,'update'])->name('update.about_us');
     Route::get('/about_us/delete/{id}', [AboutUsController::class,'destroy'])->name('delete.about_us');

     // ------------------------Location-----------------------------
     Route::get('/location', [LocationController::class,'index'])->name('location.view');
     Route::get('/location/add', [LocationController::class,'create'])->name('add.location');
     Route::post('/location/add', [LocationController::class,'store'])->name('store.location');
     Route::get('/location/edit/{id}', [LocationController::class,'edit'])->name('edit.location');
     Route::put('/location/update/{id}', [LocationController::class,'update'])->name('update.location');
     Route::get('/location/delete/{id}', [LocationController::class,'destroy'])->name('delete.location');

     // ------------------------Contact Us-----------------------------
     Route::get('/contact_us', [ContactUsController::class,'index'])->name('contact_us.view');
     Route::get('/contact_us/add', [ContactUsController::class,'create'])->name('add.contact_us');
     Route::post('/contact_us/add', [ContactUsController::class,'store'])->name('store.contact_us');
     Route::get('/contact_us/edit', [ContactUsController::class,'edit'])->name('edit.contact_us');
     Route::put('/contact_us/update/{id}', [ContactUsController::class,'update'])->name('update.contact_us');
     Route::get('/contact_us/delete/{id}', [ContactUsController::class,'destroy'])->name('delete.contact_us');
     Route::get('/contact_us/report', [ContactUsController::class,'report'])->name('contact_us.report.view');
      
     // ------------------------Contact Details-----------------------------
      Route::get('/contact-details', [ContactDetailsController::class,'index'])->name('contact.details.view');
      Route::get('/contact-details/add', [ContactDetailsController::class,'create'])->name('add.contact.details');
      Route::post('/contact-details/add/store', [ContactDetailsController::class,'store'])->name('store.contact.details.store');
      Route::get('/contact-details/edit/{id}', [ContactDetailsController::class,'edit'])->name('edit.contact.details');
      Route::put('/contact-details/update/{id}', [ContactDetailsController::class,'update'])->name('update.contact.details');
      Route::get('/contact-details/delete/{id}', [ContactDetailsController::class,'destroy'])->name('delete.contact.details');
        
      
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

 