<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// =============== Back Routes ===============
Route::prefix('admin')->name('admin')->middleware('isLogin')->group(function (){
    Route::get('login','App\Http\Controllers\Back\AuthController@login')->name('Login');
    Route::post('login','App\Http\Controllers\Back\AuthController@loginPost')->name('LoginPost');
});


Route::prefix('admin')->name('admin')->middleware('isAdmin')->group(function (){
    Route::get('dashboard','App\Http\Controllers\Back\Dashboard@index')->name('Dashboard');
    Route::resource('abouts','App\Http\Controllers\Back\AboutController');
    Route::get('logout','App\Http\Controllers\Back\AuthController@logout')->name('Logout');
});





// =============== Front Routes ===============
Route::get('/', 'App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::post('/','App\Http\Controllers\Front\Homepage@contact')->name('contact');
//Route::get('/portfolio_desc/{id}', 'App\Http\Controllers\Front\PortfolioDesc@index')->name('portfolio_desc');


