<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frotend\HomeController;
use App\Http\Controllers\frotend\GiohangController;
use App\Http\Controllers\frotend\BaivietController;
use App\Http\Controllers\frotend\LienheController;
use App\Http\Controllers\frotend\SanphamController;
use App\Http\Controllers\frotend\TimkiemController;
use App\Http\Controllers\frotend\DashboardController;
use App\Http\Controllers\frotend\BannerController;
use App\Http\Controllers\frotend\CategoryController;
use App\Http\Controllers\frotend\ConfigController;
use App\Http\Controllers\frotend\ContactController;
use App\Http\Controllers\frotend\CustomerController;
use App\Http\Controllers\frotend\MenuController;
use App\Http\Controllers\frotend\OrderController;
use App\Http\Controllers\frotend\PageController;
use App\Http\Controllers\frotend\PostController;
use App\Http\Controllers\frotend\ProductController;
use App\Http\Controllers\frotend\TopicController;
use App\Http\Controllers\frotend\UserController;

//khai báo route trang người dùng
Route::get('/',[HomeController::class, 'index'])->name('site.home');



//khai báo route trang quan Ly
    Route::prefix('admin')->group(function(){
    #admin
    Route::get('/',[DashboardController::class, 'index'])->name('admin.Dashboard');
    #admin/banner  
    Route::resource('banner', BannerController::class);
    #admin/brand  
    Route::resource('brand', BrandController::class);
    #admin/category
    Route::resource('category', CategoryController::class);
    #admin/config
    Route::resource('config', ConfigController::class);
    #admin/contact
    Route::resource('contact', ContactController::class);
    #admin/customer
    Route::resource('customer', CustomerController::class);
    #admin/menu
    Route::resource('menu', MenuController::class);
    #admin/order
    Route::resource('order', OrderController::class);
    #admin/page
    Route::resource('page', PageController::class);
    #admin/post
    Route::resource('post', PostController::class);
    #admin/product
    Route::resource('product', ProductController::class);
    #admin/topic
    Route::resource('topic', TopicController::class);
    #admin/user
      Route::resource('user', UserController::class);






});