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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/bushfires', function () {
    return view('bushfire/explore-bushfire');
});

Route::get('explore-information', function () {
    return view('bushfire/explore-information');
});

Route::get('/local-rules', function () {
    return view('local-rules');
});

Route::get('getRecordsByRegion', 'SpeciesCategoryController@getRecordsByRegion');
Route::get('getRecordsBySuburbs', 'SuburbAffectedController@getRecordsBySuburbs');
Route::get('getRecordsBySpecies', 'SpeciesCategoryController@getRecordsBySpecies');