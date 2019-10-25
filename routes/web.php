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

Route::get('/', 'Controller@index');

Route::get('/post_ad','post_ad@post_ad');
Route::post('/dothis','post_ad@save_ad');
Route::get('/view_ad/{id}','post_ad@view_ad');
Route::post('/send_message','post_ad@send_message');
Route::get('/featured_ad/{id}','post_ad@featured_ad');
Route::get('/all_categories','Controller@all_categories');
Route::get('category/{id}','Controller@get_category');
//User Routes
Route::group(['middleware' =>['auth'=>'verified'],'prefix' => 'user'],function (){
    Route::get('/dashboard','user_dashboard@user_dashboard');
    Route::get('/my_ads','user_dashboard@user_ads');
    Route::get('/favorite','user_dashboard@user_favorites');
    Route::get('/messages','user_dashboard@messages');
    Route::post('/profile','user_dashboard@profile');

    Route::get('/update_ad/{id}','post_ad@update_ad');
    Route::post('/update_ad','post_ad@update_ads');
});


//Admin Routes
Route::get('/admin/login','admin\admin_auth\LoginController@showLoginForm');
Route::post('/admin/login','admin\admin_auth\LoginController@login');
Route::group(['middleware' =>['admin'],'prefix' => 'admin'],function (){
    Route::get('dashboard','admin\dashboard\dashboard_controller@dashboard');
    Route::post('/logout','admin\admin_auth\LoginController@logout');
    //profile
    Route::get('profile','admin\dashboard\dashboard_controller@profile');
    //category
    Route::get('category','admin\dashboard\dashboard_controller@category');
    Route::get('add_category','admin\dashboard\dashboard_controller@add_category');
    Route::post('save_category','admin\dashboard\dashboard_controller@save_category');
    Route::get('edit_category/{id}','admin\dashboard\dashboard_controller@edit_category');
    Route::get('delete_category/{id}','admin\dashboard\dashboard_controller@delete_category');
    Route::post('update_category','admin\dashboard\dashboard_controller@update_category');
    Route::get('/sub_categories/{category}','admin\dashboard\dashboard_controller@sub_categories');
    //attributes
    Route::get('attribute','admin\dashboard\dashboard_controller@attribute');
    Route::get('add_attribute','admin\dashboard\dashboard_controller@add_attribute');
    Route::post('save_attribute','admin\dashboard\dashboard_controller@save_attribute');
    Route::get('edit_attribute/{id}','admin\dashboard\dashboard_controller@edit_attribute');
    Route::get('delete_attribute/{id}','admin\dashboard\dashboard_controller@delete_attribute');
    Route::post('update_attribute','admin\dashboard\dashboard_controller@update_attribute');
    //cities
    Route::get('city','admin\dashboard\dashboard_controller@city');
    Route::get('add_city','admin\dashboard\dashboard_controller@add_city');
    Route::post('save_city','admin\dashboard\dashboard_controller@save_city');
    Route::get('edit_city/{id}','admin\dashboard\dashboard_controller@edit_city');
    Route::get('delete_city/{id}','admin\dashboard\dashboard_controller@delete_city');
    Route::post('update_city','admin\dashboard\dashboard_controller@update_city');
    //ads
    Route::get('ads','admin\dashboard\dashboard_controller@ads');
    Route::get('featured_ads','admin\dashboard\dashboard_controller@featured_ads');
    Route::get('view_ad/{id}','admin\dashboard\dashboard_controller@view_ad');
    Route::get('active_ad/{id}','admin\dashboard\dashboard_controller@active_ad');
    Route::get('featured/{id}','admin\dashboard\dashboard_controller@featured');
    //users
    Route::get('users','admin\dashboard\dashboard_controller@users');
    Route::get('active_user/{id}','admin\dashboard\dashboard_controller@active_user');
    //packages
    Route::get('package','admin\dashboard\dashboard_controller@package');
    Route::get('add_package','admin\dashboard\dashboard_controller@add_package');
    Route::post('save_package','admin\dashboard\dashboard_controller@save_package');
    Route::get('edit_package/{id}','admin\dashboard\dashboard_controller@edit_package');
    Route::get('delete_package/{id}','admin\dashboard\dashboard_controller@delete_package');
    Route::post('update_package','admin\dashboard\dashboard_controller@update_package');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
