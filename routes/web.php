<?php

// Front End
Route::get('/',"FrontController@index");
Route::get('/page/{id}', "FrontPageController@index");
Route::post('/send-email', "FrontController@send_email");
Route::get('/featured-work/{id}', "FrontController@featured_work");
Route::get('/sign-in', "SigninController@index");
Route::get('/sign-up', "SignupController@index");
Auth::routes();

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
// Back End
Route::get('/admin',"HomeController@index");
Route::get('/admin/dashboard',"HomeController@index");

// load file manager
Route::get('/fm', "FileManagerController@index");


// Page
Route::get('/admin/page', "PageController@index");
Route::get('/admin/page/create', "PageController@create");
Route::post('/admin/page/save', "PageController@save");
Route::get('/admin/page/delete/{id}', "PageController@delete");
Route::get('/admin/page/edit/{id}', "PageController@edit");
Route::post('/admin/page/update', "PageController@update");
Route::get('/admin/page/view/{id}', "PageController@view");
// Page
Route::get('/admin/our-service', "OurServiceController@index");
Route::get('/admin/our-service/edit/{id}', "OurServiceController@edit");
Route::post('/admin/our-service/update', "OurServiceController@update");

//Main Menu
Route::get('/main-menu', "MainMenuController@index");
Route::get('/main-menu/create', "MainMenuController@create");
Route::post('/main-menu/save', "MainMenuController@save");
Route::get('/main-menu/delete/{id}', "MainMenuController@delete");
Route::get('/main-menu/edit/{id}', "MainMenuController@edit");
Route::post('/main-menu/update', "MainMenuController@update");

// user route
Route::get('/user', "UserController@index");
Route::get('/user/profile', "UserController@load_profile");
Route::get('/user/reset-password', "UserController@reset_password");
Route::post('/user/change-password', "UserController@change_password");
Route::get('/user/finish', "UserController@finish_page");
Route::post('/user/update-profile', "UserController@update_profile");
Route::get('/user/delete/{id}', "UserController@delete");
Route::get('/user/create', "UserController@create");
Route::post('/user/save', "UserController@save");
Route::get('/user/edit/{id}', "UserController@edit");
Route::post('/user/update', "UserController@update");
Route::get('/user/update-password/{id}', "UserController@load_password");
Route::post('/user/save-password', "UserController@update_password");

// role
Route::get('/role', "RoleController@index");
Route::get('/role/create', "RoleController@create");
Route::post('/role/save', "RoleController@save");
Route::get('/role/delete/{id}', "RoleController@delete");
Route::get('/role/edit/{id}', "RoleController@edit");
Route::post('/role/update', "RoleController@update");
Route::get('/role/permission/{id}', "PermissionController@index");
Route::post('/rolepermission/save', "PermissionController@save");


Route::get('/home', 'HomeController@index')->name('home');

// Slide 
Route::get('/slide', "SlideController@index");
Route::get('/slide/create', "SlideController@create");
Route::post('/slide/save', "SlideController@save");
Route::get('/slide/edit/{id}', "SlideController@edit");
Route::post('/slide/update', "SlideController@update");
Route::get('/slide/delete/{id}', "SlideController@delete");

// Video
Route::get('/admin/video', "VideoController@index");
Route::get('/admin/video/create', "VideoController@create");
Route::post('/admin/video/save', "VideoController@save");
Route::get('/admin/video/edit/{id}', "VideoController@edit");
Route::post('/admin/video/update', "VideoController@update");
Route::get('/admin/video/delete/{id}', "VideoController@delete");
// Social
Route::get('/social', "SocialController@index");
Route::get('/social/create', "SocialController@create");
Route::post('/social/save', "SocialController@save");
Route::get('/social/edit/{id}', "SocialController@edit");
Route::post('/social/update', "SocialController@update");
Route::get('/social/delete/{id}', "SocialController@delete");
