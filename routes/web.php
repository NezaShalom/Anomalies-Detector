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
});






Route::get('/', 'FrontendController@index');
Route::get('/create-account', 'FrontendController@getCreateaccount')->name('frontend.create');
Route::get('/mituweri', 'FrontendController@getMituweri')->name('frontend.mituweri');
Route::get('/document', 'FrontendController@getDocument')->name('frontend.shaka');
Route::get('/single', 'FrontendController@getIngaragu')->name('frontend.ingaragu');
Route::get('/being-alive', 'FrontendController@getAriho')->name('frontend.ariho');

Route::get('/identity_card_temporary_issuance', 'FrontendController@getSimbura')->name('frontend.simbura');
Route::get('/widow_widower_certificate', 'FrontendController@getPartde')->name('frontend.partde');
Route::get('/aquire_id', 'FrontendController@getSabaid')->name('frontend.sabaid');
Route::get('/marriage_services', 'FrontendController@getShingirwa')->name('frontend.shingirwa');

//BACKEND
/*
Route::get('/admin', 'HomeController@index')->name('home');
*/
