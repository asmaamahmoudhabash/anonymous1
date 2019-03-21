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



//login
Route::get('login', function () {

    if (Auth::check()) {
        return Redirect::to('/AdminPanel/Dashboard');
    } else {
        return View::make('admin.users.login');
    }

});


Route::post('login', array('before' => 'csrf', function (Request $request) {
    if (Auth::attempt(array('email' => $request->input('email'), 'password' => $request->input('password'))))  // login_access=1 if i wanna make premissions levels
    {
        return Redirect::to('/AdminPanel/Dashboard');
    } else {
        Session::set('loginerror', 'invalid data');
        return View::make('admin.users.login');
    }

}));

Route::get('logout', function () {
    Auth::logout();

    return Redirect::to('login');
});




Route::group(['prefix' => 'AdminPanel'],function() {

    Route::resource('Dashboard', 'DashboardController');
    Route::resource('Settings', 'SettingController');
    Route::resource('Categories', 'CategoryController');
    Route::resource('News', 'NewsController');
    Route::get('/delete_news_img/{id}','NewsController@delete_img' );



});