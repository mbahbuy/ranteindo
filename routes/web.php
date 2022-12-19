<?php

use Illuminate\Support\Facades\{Route, Auth};

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::post('/contactus', ['as' => 'contact.us', 'uses' => 'ContactController@store']);
Route::post('/subscribe', ['as' => 'subscribe', 'uses' => 'ContactController@subscribe']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

});
