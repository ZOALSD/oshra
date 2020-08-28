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
Route::group(['middleware' => 'auth'],

function () {
		Route::any('logout', 'Auth\LoginController@logout')->name('logout');
	});

Route::group(['middleware' => 'Lang'], function () {
	Route::get('/','front\Home@index');
	Route::get('allcauses','front\Home@AllCauses')->name('allcauses');
	Route::get('WellCauses','front\Home@WellCauses')->name('WellCauses');
    Route::get('allnews','front\Home@allnews')->name('allnews');//WellAllCauses
    Route::get('WellAllCauses','front\Home@WellAllCauses')->name('WellAllCauses');//
    Route::get('cause/{id}','front\Home@cause')->name('cause');
    Route::get('blog/{id}','front\Home@blog')->name('blog');
	Route::get('volunteer','front\Volunteers@index')->name('volunteer');//

});



Route::middleware(ProtectAgainstSpam::class )->group(function () {
		Auth::routes(['verify' => true]);

	});
