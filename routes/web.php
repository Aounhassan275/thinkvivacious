<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

/******************ADMIN PANELS ROUTES****************/
Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'Admin'], function () {
 
    /*******************LOGIN ROUTES*************/
    Route::view('login', 'admin.auth.index')->name('login');
    Route::post('login','AuthController@login');
     /******************MESSAGE ROUTES****************/
     Route::resource('message', 'MessageController');
     Route::resource('comment', 'CommentController');
    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************ADMIN ROUTES****************/
      Route::resource('admin', 'AdminController');    
    /*******************Profile ROUTES*************/
    Route::view('profile', 'admin.profile.index')->name('profile.index');
        /******************Blog Category ROUTES****************/
        Route::resource('category', 'CategoryController');
        /******************Blog ROUTES****************/
        Route::resource('blog', 'BlogController');   
        /******************Information ROUTES****************/
        Route::resource('information', 'InformationController');
});
});


/******************FRONTEND ROUTES****************/
Route::view('/', 'front.home.index');
Route::get('blogs','Front\PageController@blog')->name('blog.index');
Route::get('blogs/{name}', 'Front\PageController@showBlogNext')->name('blog.show');
Route::get('blog_category','Front\PageController@category')->name('category.index');
Route::get('category/{name}', 'Front\PageController@showCategorynext')->name('category.show');
Route::get('search', 'Front\PageController@search')->name('search.show');
Route::view('contact_us', 'front.contact.index')->name('contact.index');
Route::view('about_us', 'front.about.index')->name('about.index');
Route::view('privacy_policy', 'front.privacy.index')->name('privacy.index');
/******************FUNCTIONALITY ROUTES****************/
Route::get('/cd', function() {
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'DONE';
});

