<?php

/****************   Model binding into route **************************/
Route::model('article', 'App\Article');
Route::model('offer', 'App\Offer');
Route::model('transaction', 'App\Transaction');
Route::model('notification', 'App\Notification');
Route::model('articlecategory', 'App\ArticleCategory');
Route::model('language', 'App\Language');
Route::model('photoalbum', 'App\PhotoAlbum');
Route::model('photo', 'App\Photo');
Route::model('user', 'App\User');
Route::model('angel', 'App\Angel');
Route::model('homeless', 'App\Homeless');
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('offers', 'OffersController@index');
Route::get('angels', 'AngelsController@index');
Route::get('homeless', 'HomelessController@index');
Route::get('offer/{id}', 'OffersController@show');
Route::get('angel/{id}', 'AngelsController@show');
Route::get('homeless/{id}', 'HomelessController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/***************    Homeless routes  **********************************/
Route::group(['prefix' => 'homeless'], function() {
# Angel Dashboard
    Route::get('transaction/dashboard', 'TransactionController@index');

# Offers
    Route::get('transaction/data', 'TransactionController@data');
    Route::get('transaction/create/{offer}', 'TransactionController@create');
    Route::get('transaction/{transaction}/show', 'TransactionController@show');
    Route::get('transaction/{transaction}/edit', 'TransactionController@edit');
    Route::get('transaction/{transaction}/delete', 'TransactionController@delete');
    Route::get('transaction/reorder', 'TransactionController@getReorder');
    Route::resource('transaction', 'TransactionController');
});

/***************    Angel routes  **********************************/
Route::group(['prefix' => 'angel'], function() {
# Angel Dashboard
    Route::get('offer/dashboard', 'Angel\OfferController@index');

# Offers
    Route::get('offer/data', 'Angel\OfferController@data');
    Route::get('offer/{offer}/show', 'Angel\OfferController@show');
    Route::get('offer/{offer}/{notification}/accept', 'Angel\OfferController@accept');
    Route::get('offer/{offer}/{notification}/reject', 'Angel\OfferController@reject');
    Route::get('offer/{offer}/edit', 'Angel\OfferController@edit');
    Route::get('offer/{offer}/delete', 'Angel\OfferController@delete');
    Route::get('offer/reorder', 'Angel\OfferController@getReorder');
    Route::resource('offer', 'Angel\OfferController');
});

/***************    User routes  **********************************/
Route::get('user/{user}/edit', 'UserController@edit');
Route::get('user/notification', 'UserController@showNotification');
Route::get('user/{user}/delete', 'UserController@delete');
Route::resource('user', 'UserController');

/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');

    # Language
    Route::get('language/data', 'Admin\LanguageController@data');
    Route::get('language/{language}/show', 'Admin\LanguageController@show');
    Route::get('language/{language}/edit', 'Admin\LanguageController@edit');
    Route::get('language/{language}/delete', 'Admin\LanguageController@delete');
    Route::resource('language', 'Admin\LanguageController');

    # Offers
    Route::get('offer/data', 'Admin\OfferController@data');
    Route::get('offer/{offer}/show', 'Admin\OfferController@show');
    Route::get('offer/{offer}/edit', 'Admin\OfferController@edit');
    Route::get('offer/{offer}/delete', 'Admin\OfferController@delete');
    Route::get('offer/reorder', 'Admin\OfferController@getReorder');
    Route::resource('offer', 'Admin\OfferController');

    # Articles
    Route::get('article/data', 'Admin\ArticleController@data');
    Route::get('article/{article}/show', 'Admin\ArticleController@show');
    Route::get('article/{article}/edit', 'Admin\ArticleController@edit');
    Route::get('article/{article}/delete', 'Admin\ArticleController@delete');
    Route::get('article/reorder', 'Admin\ArticleController@getReorder');
    Route::resource('article', 'Admin\ArticleController');

    # Photo Album
    Route::get('photoalbum/data', 'Admin\PhotoAlbumController@data');
    Route::get('photoalbum/{photoalbum}/show', 'Admin\PhotoAlbumController@show');
    Route::get('photoalbum/{photoalbum}/edit', 'Admin\PhotoAlbumController@edit');
    Route::get('photoalbum/{photoalbum}/delete', 'Admin\PhotoAlbumController@delete');
    Route::resource('photoalbum', 'Admin\PhotoAlbumController');

    # Photo
    Route::get('photo/data', 'Admin\PhotoController@data');
    Route::get('photo/{photo}/show', 'Admin\PhotoController@show');
    Route::get('photo/{photo}/edit', 'Admin\PhotoController@edit');
    Route::get('photo/{photo}/delete', 'Admin\PhotoController@delete');
    Route::resource('photo', 'Admin\PhotoController');

    # Users
    Route::get('user/data', 'Admin\UserController@data');
    Route::get('user/{user}/show', 'Admin\UserController@show');
    Route::get('user/{user}/edit', 'Admin\UserController@edit');
    Route::get('user/{user}/delete', 'Admin\UserController@delete');
    Route::resource('user', 'Admin\UserController');
});
