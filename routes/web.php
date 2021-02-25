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
    return view('auth/login');
});

Route::get('/page', function () {
    return view('page');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard2');

//zones

Route::get('/zones', 'ZonesController@index')->name('zones');

//Route::post('/zones/postZones','ZonesController@postZones');

//Route::get('/zones/delete/{id}','ZonesController@delZones');

Route::get('/zones/update/{id}','ZonesController@putZones');

Route::post('/zones/updateZones','ZonesController@updateZones');

//domain
Route::get('/domain', 'DomainController@index')->name('domain');

Route::post('/domain/postDomains','DomainController@postDomains');

Route::post('/domain/putDomains','DomainController@putDomains');

Route::post('/domain/deleteDomains','DomainController@deleteDomains');

//records
Route::get('/records/{id}', 'RecordController@getRecords');

Route::post('/record/postRecords','RecordController@postRecords');

Route::post('/record/putRecords','RecordController@putRecords');

Route::post('/record/deleteRecords','RecordController@deleteRecords');


//Route::get('/domain-meta', 'DomainmetaController@index')->name('domain-meta');

Route::get('/record', 'RecordController@index')->name('record');
