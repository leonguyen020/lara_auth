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
| For active navbar
| https://laravel-tricks.com/tricks/active-states-based-on-route-names
| https://laravel-tricks.com/tricks/setting-active-states-for-navigation
| https://stackoverflow.com/questions/29837555/setting-bootstrap-navbar-active-class-in-laravel-5?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function (){
   return redirect()->route('adminHome');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => env('BACKEND_PATH')],function (){

    // No Permission
    Route::get('/403', function () {
        return view('errors.403');
    })->name('NoPermission');

    // Not Found
    Route::get('/404', function () {
        return view('errors.404');
    })->name('NotFound');

    // Admin Home
    Route::get('/', 'HomeController@index')->name('adminHome');

    // User list management
    Route::get('/users','UserController@index')->name('users');

    // Setting page
    Route::group(['prefix' => 'settings'],function(){
        Route::get('/','SettingsController@index')->name('settings');
    });
});