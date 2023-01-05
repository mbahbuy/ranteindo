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
    Route::post('/dashboard/home/item', ['as' => 'views.top.item', 'uses' => 'ItemController@TopItem']);
    Route::delete('/dashboard/home/item/{item}', ['as' => 'views.top.item.delete', 'uses' => 'ItemController@TopItemDlt']);

    // Services
    Route::get('/dashboard/services', ['as' => 'views.services', 'uses' => 'ViewsController@Services']);
    Route::post('/dashboard/services/title', ['as' => 'views.services.title', 'uses' => 'ViewsController@ServicesTitle']);
    Route::post('/dashboard/services/item', ['as' => 'views.services.item', 'uses' => 'ItemController@ServicesItem']);
    Route::delete('/dashboard/services/item/{item}', ['as' => 'views.services.item.delete', 'uses' => 'ItemController@ServicesItemDlt']);

    // About
    Route::get('/dashboard/about', ['as' => 'views.about', 'uses' => 'ViewsController@About']);
    Route::post('/dashboard/about/img', ['as' => 'views.about.img', 'uses' => 'ViewsController@AboutImage']);
    Route::post('/dashboard/about/text', ['as' => 'views.about.text', 'uses' => 'ViewsController@AboutText']);
    Route::post('/dashboard/about/relationship', ['as' => 'views.about.relationship', 'uses' => 'ViewsController@AboutRelationship']);

    // Project
    Route::get('/dashboard/project', ['as' => 'views.project', 'uses' => 'ViewsController@Project']);
    Route::post('/dashboard/project/title', ['as' => 'views.project.title', 'uses' => 'ViewsController@ProjectTitle']);
    Route::post('/dashboard/project/item', ['as' => 'views.project.item', 'uses' => 'ItemController@ProjectItem']);
    Route::delete('/dashboard/project/item/{item}', ['as' => 'views.project.item.delete', 'uses' => 'ItemController@ProjectItemDlt']);

    // Contact Us
    Route::get('/dashboard/contact', ['as' => 'views.contact', 'uses' => 'ViewsController@Contact']);
    Route::post('/dashboard/contact/title', ['as' => 'views.contact.title', 'uses' => 'ViewsController@ContactTitle']);
    Route::post('/dashboard/contact/info/tlp', ['as' => 'views.contact.info.tlp', 'uses' => 'ItemController@ContactInfoTlp']);
    Route::post('/dashboard/contact/info/email', ['as' => 'views.contact.info.email', 'uses' => 'ItemController@ContactInfoEmail']);
    Route::delete('/dashboard/contact/info/tlp/{item}', ['as' => 'views.contact.info.tlp.delete', 'uses' => 'ItemController@ContactInfoTlpDlt']);
    Route::delete('/dashboard/contact/info/email/{item}', ['as' => 'views.contact.info.email.delete', 'uses' => 'ItemController@ContactInfoEmailDlt']);

    // Footer
    Route::get('/dashboard/footer', ['as' => 'views.footer', 'uses' => 'ViewsController@Footer']);
    Route::post('/dashboard/footer/item', ['as' => 'views.footer.item', 'uses' => 'ItemController@FooterItem']);
    Route::delete('/dashboard/footer/item/{item}', ['as' => 'views.footer.item.delete', 'uses' => 'ItemController@FooterItemDlt']);

});
