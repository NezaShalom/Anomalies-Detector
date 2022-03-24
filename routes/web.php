<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/admin', 'AdminController@admin')->name('admin');


Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
// Document
Route::resource('dosiyes', 'DosiyeController')->middleware('admin');
Route::get('edit/{id}', 'DosiyeController@edit');
Route::delete('delete/{id}', 'DosiyeController@destroy');
// Service
Route::resource('services', 'ServiceController');
Route::post('service_status', 'ServiceController@serviceStatus')->name('services.status');
//Anomaly Controller
Route::get('anomalies/failedAuthentication', 'AnomalyController@failedAutho')->name('failedAutho');
Route::get('anomalies/failedentry', 'AnomalyController@failedDataEntry')->name('failedDataEntry');
Route::get('anomalies/failedrequest', 'AnomalyController@failedServiceRequest')->name('failedServiceRequest');


//Front Pages
Route::get('/', 'FrontendController@index');
//Route::get('services', 'FrontendController@serviice');
Route::get('serv/{slug}', 'FrontendController@viewservice');
Route::get('/create-account', 'FrontendController@getCreateaccount')->name('frontend.create');
Route::get('/mituweri', 'FrontendController@getMituweri')->name('frontend.mituweri');
Route::get('/document', 'FrontendController@getDocument')->name('frontend.shaka');
Route::get('/single', 'FrontendController@getIngaragu')->name('frontend.ingaragu')->middleware('auth');
Route::get('/being-alive', 'FrontendController@getAriho')->name('frontend.ariho')->middleware('auth');;
Route::get('/identity_card_temporary_issuance', 'FrontendController@getSimbura')->name('frontend.simbura')->middleware('auth');;
Route::get('/widow_widower_certificate', 'FrontendController@getPartde')->name('frontend.partde')->middleware('auth');;
Route::get('/aquire_id', 'FrontendController@getSabaid')->name('frontend.sabaid');
Route::get('/marriage_services', 'FrontendController@getShingirwa')->name('frontend.shingirwa')->middleware('auth');;
Route::get('/criminal_status', 'FrontendController@getCriminal_status')->name('frontend.criminalfree')->middleware('auth');;
Route::get('/divorce_status', 'FrontendController@getDivorce_status')->name('frontend.divorce')->middleware('auth');;

//POST
Route::post('/ingaragu', 'ValidationController@validate_ingaragu')->name('ingaragu.store');
Route::post('/widower', 'ValidationController@validate_widower')->name('widower.store');
Route::post('/being-alive-status', 'ValidationController@validate_ariho')->name('ariho.store');
Route::post('/minor_aquire_id', 'ValidationController@validate_sabaid')->name('sabaid.store');
Route::post('/criminal_status_free', 'ValidationController@validate_criminalfree')->name('criminalfree.store');
Route::post('/divorce_status_approval', 'ValidationController@validate_divorcestatus')->name('divorcestatus.store');
Route::post('/temporary_NationalID_license', 'ValidationController@validate_SimburaID')->name('tempoid.store');

//Receipt
Route::get('user-receipt', 'FrontendController@receipt')->name('frontend.receipt');
//Payment
Route::any('thank', 'PaymentController@lastone');
Route::any('payment-page', 'PaymentController@index');
Route::any('verify-payment', 'PaymentController@verify');


Route::get('/home', 'HomeController@index')->name('home');
