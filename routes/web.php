<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/signupPage','UserController@signupPage');
Route::post('/signup','UserController@signup')->name('signup');

Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('/admin','UserController@admin');
    Route::get('/add_user','UserController@addUser');
    Route::post('/add_user','UserController@add_user')->name('add_user');
    Route::get('/allUser','UserController@allUser')->name('allUser');
    Route::get('/dataPage','UserController@dataPage')->name('dataPage');
    Route::post('/addData','UserController@addData')->name('addData');
    Route::get('/Request','UserController@Request')->name('Request');
    Route::get('/details/{id}','UserController@details')->name('details');
    Route::get('/delete/{id}','UserController@delete')->name('delete');
    Route::get('/viewUsersData/{id}','UserController@viewUsersData')->name('viewUsersData');
    Route::get('/userBlock/{id}','UserController@userBlock')->name('userBlock');
    Route::get('/userunBlock/{id}','UserController@userunBlock')->name('userunBlock');
});
Route::group(['middleware' => 'App\Http\Middleware\User'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/viewData', 'UserController@viewData')->name('viewData');
    // Route::get('/serrch', 'UserController@viewData')->name('viewData');
});


