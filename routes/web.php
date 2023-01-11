<?php

use Illuminate\Support\Facades\{Route, Auth};

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/produk', ['as' => 'project', 'uses' => 'HomeController@Project']);
Route::get('/produk/{post:slug}', ['as' => 'project.show', 'uses' => 'HomeController@ProjectPost']);
Route::get('/produkcontoh', ['as' => 'project.contoh', 'uses' => 'HomeController@ProjectContoh']);
Route::get('/portfolio', ['as' => 'portfolio', 'uses' => 'HomeController@Portfolio']);
Route::get('/portfolio/{post:slug}', ['as' => 'portfolio.show', 'uses' => 'HomeController@PortfolioPost']);
Route::get('/portfoliocontoh', ['as' => 'portfolio.contoh', 'uses' => 'HomeController@PortfolioContoh']);
Route::get('/videos', ['as' => 'videos', 'uses' => 'HomeController@Videos']);


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

    // Portfolio
    Route::get('/dashboard/portfolio', ['as' => 'views.portfolio', 'uses' => 'ViewsController@Portfolio']);
    Route::post('/dashboard/portfolio/title', ['as' => 'views.portfolio.title', 'uses' => 'ViewsController@PortfolioTitle']);
    Route::post('/dashboard/portfolio/post', ['as' => 'views.portfolio.post', 'uses' => 'PostController@PortfolioPost']);
    Route::delete('/dashboard/portfolio/post/{post:slug}', ['as' => 'views.portfolio.post.delete', 'uses' => 'PostController@PortfolioPostDlt']);

    // Project
    Route::get('/dashboard/produk', ['as' => 'views.project', 'uses' => 'ViewsController@Project']);
    Route::post('/dashboard/produk/title', ['as' => 'views.project.title', 'uses' => 'ViewsController@ProjectTitle']);
    Route::post('/dashboard/produk/post', ['as' => 'views.project.post', 'uses' => 'PostController@ProjectPost']);
    Route::delete('/dashboard/produk/post/{post:slug}', ['as' => 'views.project.post.delete', 'uses' => 'PostController@ProjectPostDlt']);

    // Videos
    Route::get('/dashboard/videos', ['as' => 'views.videos', 'uses' => 'ViewsController@Videos']);
    Route::post('/dashboard/videos/item', ['as' => 'views.videos.item', 'uses' => 'ItemController@VideosItem']);
    Route::delete('/dashboard/videos/item/{item}', ['as' => 'views.videos.item.delete', 'uses' => 'ItemController@VideosItemDlt']);

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

    Route::get('/checkSlug', ['as' => 'checkslug', 'uses' => 'PostController@Slug']);

});
