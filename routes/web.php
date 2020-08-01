<?php

use Illuminate\Support\Facades\Route;

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
    return view('/welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

// Route::get('/discography', function () {
//     return view('discography');
// });

Route::get('/mongodb', function () {
    return view('mongodb');
});

Auth::routes();

//FRONT-END//
//ALBUMS

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/discography', 'DiscographyController@Discography')->name('Discography');

// Route::get('/discography/{id}', 'DiscographyController@Details')->name('Details');

//BANDS

Route::get('/discography/bands', 'BandController@BandStore')->name('BandStore');

// Route::get('/discography/{id}', 'BandController@DetailsBands')->name('DetailsBands');

//INCOMINGS

Route::get('/discography/incomming', 'InconmmingController@incomingStore')->name('incomingStore');

//ADMIN ALBUMS

Route::get('/admin/disco', 'DiscographyController@Index')->name('Index');

Route::get('/admin/disco/create', "DiscographyController@Create");

Route::post('/admin/disco/create', "DiscographyController@Store");

Route::get('/admin/disco/delete/{id}', "DiscographyController@Delete");

Route::get('/admin/disco/edit/{id}', "DiscographyController@Edit");

Route::get('/admin/disco/{id}', "DiscographyController@Show");

Route::post('/admin/disco/edit', "DiscographyController@Update");

Route::delete('/admin/disco/delete', "DiscographyController@Remove");

//ADMIN BANDS

Route::get('/admin/bands', 'BandController@Index')->name('IndexBand');

Route::get('/admin/bands/create', "BandController@Create");

Route::post('/admin/bands/create', "BandController@Store");

Route::get('/admin/bands/delete/{id}', "BandController@Delete");

Route::get('/admin/bands/edit/{id}', "BandController@Edit");

Route::get('/admin/bands/{id}', "BandController@Show");

Route::post('/admin/bands/edit', "BandController@Update");

Route::delete('/admin/bands/delete', "BandController@Remove");

//ADMIN iNCOMMINGS

Route::get('/admin/incommings', 'InconmmingController@Index')->name('IndexIN');

Route::get('/admin/incommings/create', "InconmmingController@Create");

Route::post('/admin/incommings/create', "InconmmingController@Store");

Route::get('/admin/incommings/delete/{id}', "InconmmingController@Delete");

Route::get('/admin/incommings/edit/{id}', "InconmmingController@Edit");

Route::get('/admin/incommings/{id}', "InconmmingController@Show");

Route::post('/admin/incommings/edit', "InconmmingController@Update");

Route::delete('/admin/incommings/delete', "InconmmingController@Remove");






