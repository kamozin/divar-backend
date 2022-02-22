<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::get('/users/createFolder', 'UserController@createFolder');
    Route::resource('users', 'UserController');
    Route::resource('contracts', 'ContractController');
    Route::resource('buyer', 'BuyerController');
    Route::resource('seller', 'SellerController');
    Route::resource('sender', 'SenderController');
    Route::resource('package', 'PackageController');
    Route::resource('products', 'ProductsController');
});
