<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
// */

// //Route::resource('comments','CommentsController');
//  Route::auth();

// // Route::get('/myaddress',function(){
// //     return Request::ip();
// // });
// Route::get('/home', 'HomeController@index');
// Route::get('/', 'HomeController@index');
// // Route::resource('comments','CommentsController');

// // Route::get('/notfoundpage',function(){
// //     return view('page');
// // });

// // Route::group(['middleware'=>'auth'],function(){

// //     Route::get('/pop',function(){return "pop";});
// //     Route::get('/push',function(){return "pop";});
// //     Route::get('/help',function(){return "pop";});
// //     Route::get('/rec',function(){return "pop";});

// //     Route::group(['middleware'=>'test:1'],function(){
// //         Route::get('/posts','PostsController@index');
// //     });
    

// // });


// // Route::auth();

// // Route::get('/home', 'HomeController@index');



// Route::get('admin/login',function(){
//      return view('admin_login');
//  });

// // Route::post('admin/login','PostsController@index');


// // Route::group(['middleware'=>'admins'],function(){
// //     Route::get('admin',function(){
// //         return "welcome to admin panel";
// //     });
// // });


// // Route::get('superadmins/login','SuperadminsController@form');
// // Route::post('superadmins/login','SuperadminsController@checklogin');

// // Route::group(['middleware'=>'superadmins'],function(){
// //     Route::get('superadmin',function(){
// //         return "superadmin dashboard";
// //     }); 
// // });

// Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

// Route::get('');

Route::get('/importers','ImportersController@create');
Route::post('/importers','ImportersController@store');