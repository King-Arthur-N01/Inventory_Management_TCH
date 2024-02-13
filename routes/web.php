<?php

use App\Http\Controllers\DebugController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes();
Route::get('/home', 'HomeController@homeindex')->name('home');

Route::get('/login','Auth\LoginController@indexlogin')->name('login');
Route::post('/login','Auth\LoginController@authenticateuser')->name('pushlogin');
Route::get('/logout','Auth\LoginController@signout')->name('logout');

Route::get('/register','Auth\RegisterController@indexregistration')->name('register');
Route::post('/register','Auth\RegisterController@authenticatecreate')->name('pushregister');
Route::get('/userdelete/{id}','Auth\RegisterController@deleteuser')->name('deleteaccount');
Route::get('/manageuser','Account\UsertableController@readusertable')->name('manageuser');

Route::get('/registeritems','StockMonitoring\StockitemsController@indexregisteritems')->name('additem');
Route::post('/registeritems','StockMonitoring\StockitemsController@createitems')->name('pushitem');
Route::get('/updateitems/{id}','StockMonitoring\StockitemsController@indexupdateitems')->name('edititem');
Route::put('/updateitems/{id}','StockMonitoring\StockitemsController@updateitems')->name('pushedititem');
Route::get('/itemdelete/{id}','StockMonitoring\StockitemsController@deleteitem')->name('deleteitem');
Route::get('/stockitems','StockMonitoring\StockitemsController@readstocktable')->name('managestock');

Route::get('/debug', 'DebugController@debugindex');
