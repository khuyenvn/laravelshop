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

/*
 * Admin Routes
 */

Route::prefix('admin')->group(function (){
    Route::middleware('auth:admin')->group(function (){
        Route::get('/', 'DashboardController@index');
        Route::resource('/products', 'ProductController');
        Route::resource('/orders', 'OrderController');
        Route::get('/confirm/{id}', 'OrderController@confirm')->name('order.confirm');
        Route::get('/pending/{id}', 'OrderController@pending')->name('order.pending');
        Route::get('/show/{id}', 'OrderController@show')->name('order.show');
        Route::resource('/users', 'UsersController');
        Route::get('/user/show/{id}', 'UsersController@show')->name('user.show');
        Route::get('/logout', 'AdminUserController@logout')->name('logout');
    });

    Route::get('/login', 'AdminUserController@index')->name('login');
    Route::post('/login', 'AdminUserController@store')->name('login');

});

//Front Routes
Route::get('/', 'Front\HomeController@index');

//User Login
Route::get('/user/login', 'Front\SessionsController@index');
Route::post('/user/login', 'Front\SessionsController@store');

//User Logout
Route::get('/user/logout', 'Front\SessionsController@logout');

//User Registration
Route::get('/user/register', 'Front\RegistrationController@index');
Route::post('/user/register', 'Front\RegistrationController@store');

Route::get('/user/profile', 'Front\UserProfileController@index');
Route::get('/user/order/{id}', 'Front\UserProfileController@show');

//Cart
Route::get('/cart', 'Front\CartController@index');
Route::post('/cart', 'Front\CartController@store')->name('cart');
Route::delete('/cart/remove/{product}', 'Front\CartController@destroy')->name('cart.destroy');
Route::patch('/cart/update/{product}', 'Front\CartController@update')->name('cart.update');
Route::post('/cart/saveLater/{product}', 'Front\CartController@saveLater')->name('cart.saveLater');

//Save For Later
Route::delete('/saveLater/destroy/{product}', 'Front\SaveLaterController@destroy')->name('saveLater.destroy');
Route::post('/cart/moveToCart/{product}', 'Front\SaveLaterController@moveToCart')->name('moveToCart');

Route::get('empty', function () {
   Cart::instance('default') ->destroy();
});

//Checkout
Route::get('/checkout', 'Front\CheckoutController@index');
Route::post('/checkout', 'Front\CheckoutController@store')->name('checkout');