<?php

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

Route::get('/','HomeController@Index');
Route::get('/portfolio','HomeController@Portfolio');
Route::get('/contact','HomeController@Contact')->name('contact');
Route::get('/about','HomeController@About')->name('about');
Route::post('sendmail','HomeController@SendMail');
Route::get('services','HomeController@Services')->name('services');



//Admin Routes
Route::get('admin',['as'=>'login','uses'=>'AdminController@SignIn']);
Route::post('admin','AdminController@SignInValidate');

Route::get('reg','AdminController@RegUsers');




Route::group(['middleware'=>['auth']], function (){
    Route::get('admin/home','AdminController@Home');
    Route::post('admin/post/slider_image','AdminController@UploadSliderImage');
    Route::post('admin/post/wwd','AdminController@UploadWWD');
    Route::get('admin/slider/delete/{id}','AdminController@DeleteSliderImage');
    Route::get('admin/wwd/delete/{id}','AdminController@DeleteWWDImage');
});

