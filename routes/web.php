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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'HomeController@index')->name('index');

Route::get('/marker-info', 'HomeController@marker_info')->name('marker_info');

Auth::routes();
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard')->middleware('verified');;

// Social login providers...
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

//
//Route::get('/provider/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
//Route::get('/provider/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['middleware' => 'role:admin'], function() {

    Route::get('/admin', function() {
    return 'Welcome Admin';
});
});