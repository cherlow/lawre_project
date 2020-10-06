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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/roles', 'HomeController@roles');
Route::get('/', 'PagesController@index')->name('index');
Route::get('/singleitem/{product}', 'PagesController@singleitem')->name('singleitem');
Route::get('/allitems', 'PagesController@allitems');
Route::get('/sellerproducts', 'HomeController@sellerproducts');
Route::get('/selleraddproducts', 'HomeController@selleraddproducts');
Route::get('/sellereditproducts/{product}', 'HomeController@sellereditproducts');
Route::get('/category/{category}', 'PagesController@categoryproducts');

Route::post('/role', 'RoleController@store');
Route::get('/bids', 'HomeController@bids');
Route::post('/productsave', 'ProductController@store');
Route::post('/productbid/{product}', 'BidController@store');
Route::get('/acceptbid/{bid}', 'BidController@accept');
Route::get('/reviews', 'HomeController@reviews');
Route::get('/leavereview/{bid}', 'HomeController@leavereview');
Route::post('/reviewsave/{bid}', 'HomeController@reviewsave');
Route::get('/imagedelete/{image}', 'HomeController@imagedelete');
Route::post('/productupdate/{product}', 'HomeController@productupdate');
Route::get('/adminbuyers', 'AdminController@getbuyers');
Route::get('/adminsellers', 'AdminController@getsellers');
Route::get('/adminproducts', 'AdminController@getproducts');
Route::get('/admincategories', 'AdminController@getcategories');
