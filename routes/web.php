<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes(['register' => false]);

Route::post('determine', 'HomeController@determine')->name('deter');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@admin')->name('admin');

    //DepartmentController
    Route::resource('departments', 'DepartmentController');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('dosiyes', 'DosiyeController');
    Route::get('edit/{id}', 'DosiyeController@edit');
    Route::delete('delete/{id}', 'DosiyeController@destroy');
    Route::resource('services', 'ServiceController');
    Route::post('service_status', [ServiceController::class, 'serviceStatus'])->name('services.status');
});






Route::get('/', 'FrontendController@index');
Route::get('/create-account', 'FrontendController@getCreateaccount')->name('frontend.create');
Route::get('/mituweri', 'FrontendController@getMituweri')->name('frontend.mituweri');
Route::post('/mituweri', 'FrontendController@getMituweripost')->name('mituweri.post');
Route::get('/document', 'FrontendController@getDocument')->name('frontend.shaka');
Route::post('/document', 'FrontendController@getDocumentpost')->name('shaka.post');
Route::get('/single', 'FrontendController@getIngaragu')->name('frontend.ingaragu');
Route::post('/single', 'FrontendController@getIngaragupost')->name('ingaragu.post');
Route::get('/being-alive', 'FrontendController@getAriho')->name('frontend.ariho');
Route::post('/being-alive', 'FrontendController@getArihopost')->name('ariho.post');

Route::get('/identity_card_temporary_issuance', 'FrontendController@getSimbura')->name('frontend.simbura');
Route::get('/widow_widower_certificate', 'FrontendController@getPartde')->name('frontend.partde');
Route::post('/widow_widower_certificate', 'FrontendController@getPartdepost')->name('partde.post');
Route::get('/aquire_id', 'FrontendController@getSabaid')->name('frontend.sabaid');
Route::post('/aquire_id', 'FrontendController@getSabaidpost')->name('sabaid.post');
Route::get('/marriage_services', 'FrontendController@getShingirwa')->name('frontend.shingirwa');
Route::post('/marriage_services', 'FrontendController@getShingirwapost')->name('shingirwa.post');
