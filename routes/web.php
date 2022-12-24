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

    Route::post('/dashboard/password', ['as' => 'changepassword', 'uses' => 'UserController@Password']);
    
    // LOGO
    Route::get('/dashboard/logo', ['as' => 'views.logo', 'uses' => 'ViewsController@Logo']);
    Route::post('/dashboard/logo', ['as' => 'views.logo.update', 'uses' => 'ViewsController@LogoUpdate']);
   
    // TOP
    Route::get('/dashboard/home', ['as' => 'views.top', 'uses' => 'ViewsController@Top']);
    Route::post('/dashboard/home/img', ['as' => 'views.top.img', 'uses' => 'ViewsController@TopImage']);
    Route::post('/dashboard/home/text', ['as' => 'views.top.text', 'uses' => 'ViewsController@TopText']);
    Route::delete('/dashboard/home/text/{views}', ['as' => 'views.top.text.delete', 'uses' => 'ViewsController@TopTextDlt']);

    // Services
    Route::get('/dashboard/services', ['as' => 'views.services', 'uses' => 'ViewsController@Services']);
    Route::post('/dashboard/services/title', ['as' => 'views.services.title', 'uses' => 'ViewsController@ServicesTitle']);
    Route::post('/dashboard/services/item', ['as' => 'views.services.item', 'uses' => 'ViewsController@ServicesItem']);
    Route::delete('/dashboard/services/item/{views}', ['as' => 'views.services.item.delete', 'uses' => 'ViewsController@ServicesItemDlt']);

    // About
    Route::get('/dashboard/about', ['as' => 'views.about', 'uses' => 'ViewsController@About']);
    Route::post('/dashboard/about/title', ['as' => 'views.about.title', 'uses' => 'ViewsController@AboutTitle']);
    Route::post('/dashboard/about/item', ['as' => 'views.about.item', 'uses' => 'ViewsController@AboutItem']);
    Route::get('/dashboard/about/item/{views}', ['as' => 'views.about.item.delete', 'uses' => 'ViewsController@AboutItemDlt']);

    // Project
    Route::get('/dashboard/project', ['as' => 'views.project', 'uses' => 'ViewsController@Project']);
    Route::post('/dashboard/project/title', ['as' => 'views.project.title', 'uses' => 'ViewsController@ProjectTitle']);
    Route::post('/dashboard/project/item', ['as' => 'views.project.item', 'uses' => 'ViewsController@ProjectItem']);
    Route::get('/dashboard/project/item/{views}', ['as' => 'views.project.item.delete', 'uses' => 'ViewsController@ProjectItemDlt']);

    // Contact Us
    Route::get('/dashboard/contact', ['as' => 'views.contact', 'uses' => 'ViewsController@Contact']);
    Route::post('/dashboard/contact/title', ['as' => 'views.contact.title', 'uses' => 'ViewsController@ContactTitle']);
    Route::post('/dashboard/contact/map', ['as' => 'views.contact.map', 'uses' => 'ViewsController@ContactMap']);
    Route::post('/dashboard/contact/info/tlp', ['as' => 'views.contact.info.tlp', 'uses' => 'ViewsController@ContactInfoTlp']);
    Route::post('/dashboard/contact/info/email', ['as' => 'views.contact.info.email', 'uses' => 'ViewsController@ContactInfoEmail']);
    Route::delete('/dashboard/contact/info/tlp/{views}', ['as' => 'views.contact.info.tlp.delete', 'uses' => 'ViewsController@ContactInfoTlpDlt']);
    Route::delete('/dashboard/contact/info/email/{views}', ['as' => 'views.contact.info.email.delete', 'uses' => 'ViewsController@ContactInfoEmailDlt']);

    // Footer
    Route::get('/dashboard/footer', ['as' => 'views.footer', 'uses' => 'ViewsController@Footer']);
    Route::post('/dashboard/footer/item', ['as' => 'views.footer.item', 'uses' => 'ViewsController@FooterItem']);
    Route::delete('/dashboard/footer/item/{views}', ['as' => 'views.footer.item.delete', 'uses' => 'ViewsController@FooterItemDlt']);

});
