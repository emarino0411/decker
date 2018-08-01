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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('trucks','TruckController');
Route::resource('personnel','PersonnelController');
//Route::resource('motorcycles','MotorcycleController');
/*
Route::resource('delivery-destinations','DeliveryDestinationController');
Route::resource('budgets','BudgetController');

Route::resource('deliveries','DeliveriesController');
Route::resource('delivery-tracking','DeliveryTrackingController');
Route::resource('delivery-batch','DeliveryBatchController');*/