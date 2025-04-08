<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Category\CategoryController;

// Route::get('/', function () {
//     return view('index');
// });

Route::controller(AppController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('aboutus','aboutUs')->name('aboutus');
    Route::get('contactus','contactUs')->name('contactus');
    Route::get('blog/{slug}','blog')->name('blog');
    Route::get('blogs','blogs')->name('blogs');
});

Route::controller(AdminController::class)->group(function(){
       Route::get('admin/dashboard','dashboard')->name('admindashboard');
    // Route::get('aboutus','aboutUs')->name('aboutus');
    // Route::get('contactus','contactUs')->name('contactus');
    // Route::get('blog/{slug}','blog')->name('blog');
    // Route::get('blogs','blogs')->name('blogs');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('category/displaycategory','display')->name('displaycategory');
    Route::get('category/addcategory','add')->name('addcategory');
 // Route::get('contactus','contactUs')->name('contactus');
 // Route::get('blog/{slug}','blog')->name('blog');
 // Route::get('blogs','blogs')->name('blogs');
});