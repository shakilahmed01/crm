<?php

//Begin dashboard area
Route::get('/v1/dashboard','DashboardController@index')->Middleware('password.confirm')->name('dashbord_index');
//end dashboard area
//information controller
Route::get('/user/profile','InformationController@userprofile')->name('userprofile');
Route::get('/user/information','InformationController@index')->name('information_index');
Route::post('/user/information/create','InformationController@create')->name('information_create');
Route::post('/user/information/update','InformationController@update')->name('information_update');
Route::get('/user/information/list','InformationController@information_list')->Middleware('password.confirm')->name('information_list');
Route::get('/user/information/list/{information_id}','InformationController@single_list')->name('single_list');
Route::get('/user/information/delete/{information_id}','InformationController@delete')->name('information_delete');
//information controller end


// BEGIN:vehicle_list
Route::get('/v1/dashboard/vehicle/list','DashboardController@vehicle_list')->name('v1vehicle_list');

// END:vehicle_list


// add_vehicle
Route::get('/v1/dashboard/add/vehicle','DashboardController@add_vehicle')->name('add_vehicle');
// END:add_vehicle

// BEGIN:CategoryController

Route::post('/v1/dashboard/add/category/create','CategoryController@cat_create')->name('cat_create');
Route::post('/v1/dashboard/add/sub/category/create','CategoryController@sub_cat_create')->name('sub_cat_create');
Route::post('/get/subcategory','CategoryController@get_subcategory')->name('get_subcategory');
// END:CategoryController

// BEGIN:ProdcutController
Route::post('/v1/dashboard/add/vehicle/create','CarController@create')->name('vehicle_create');

Route::post('/v1/dashboard/vehicle/update','CarController@vehicleupdate')->name('vehicle_update');
Route::get('/v1/dashboard/vehicle/list/{id}/{slug}','CarController@single_vehicle_list')->name('single_list');
// product_trash
Route::get('/v1/dashboard/trash/vehicle/{vehicle_id}/{slug}','CarController@vehicle_trash')->name('vehicle_trash');
// END:ProdcutController
// Product status update

Route::get('/vehicle/activation/{id}/{activation}', 'CarController@vehicleactivation')->name('vehicleactivation');


//user Dashboard Area
Route::get('/v2/dashboard','UserdashboardController@userindex')->Middleware('password.confirm')->name('dashbord_index');
Route::get('/v2/dashboard/vehicle/list','UserdashboardController@uservehicle_list')->name('vehicle_list');
//for booking
Route::post('/v2/dashboard/book/vehicle','UserdashbordController@create')->name('vehicle_book');
Route::get('/v2/dashboard/book/vehicle/{id}/{slug}','UserdashboardController@singleBook')->name('vehicle_book');
//end for booking
//Route::get('/paymentform', 'UserdashboardController@paymentform')->name('stripe.form');
//Route::get('/addToCart/{id}/', 'UserdashboardController@paymentform')->name('stripe.form');
//end user Dashboard Area


// Product View

Route::get('/test', 'TestController@test')->name('test');
Route::get('/getAllUser', 'TestController@getAllUser')->name('getAllUser');

// END: Dashboard Area




Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');




Route::post('/addToCart', 'UserdashboardController@addToCart')->name('addToCart');
Route::get('/addToCart/{id}', 'UserdashboardController@single_payment')->name('single.payment');
Route::get('/bookedlist', 'DashboardController@bookedlist')->name('bookedlist');
Route::get('/bookedlist/{id}/{slug}', 'UserdashboardController@singleBooked')->name('singleBooked');

//begin: Payment_method
Route::get('stripe', 'StripePaymentController@stripe')->name('stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
Route::post('addToCart/stripepayment', 'StripePaymentController@stripepayment')->name('stripe.payment');
//end: Payment_method
//begin: bikash payment gateway
Route::PUT('bkash-payment', 'BkashController@bkash');
//end: bikash payment gateway
