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


// Social login providers...
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

//
//Route::get('/provider/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectToProvider');
//Route::get('/provider/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();

Route::group(['middleware' => 'role:admin'], function() {

    Route::get('/admin', function() {
    return 'Welcome Admin';
});
});


Route::group(['middleware' => 'role:student'], function() {



});

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('/tests-dashboard', 'DashboardController@tests_dashboard')->name('tests_dashboard');

Route::get('/history', 'DashboardController@history')->name('history');

Route::get('/feedback', 'DashboardController@feedback')->name('feedback');


Route::get('/my-interests', 'DashboardController@my_interests')->name('my_interests');

Route::get('/billing', 'DashboardController@billing')->name('billing');

Route::get('/my-profile', 'DashboardController@my_profile')->name('my_profile');

Route::get('/my-profile-edit', 'DashboardController@my_profile_edit')->name('my_profile_edit');

Route::get('/my-testimonials', 'DashboardController@my_testimonials')->name('my_testimonials');

Route::get('/discussions', 'DiscussionController@discussions')->name('discussions');