<?php

use Illuminate\Support\Facades\{Route, Auth};

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Auth::routes();

Route::get('/profile', ['as' => 'profile', 'uses' => 'DashboardController@index']);
Route::get('/views', ['as' => 'views.index', 'uses' => 'ViewsController@index']);