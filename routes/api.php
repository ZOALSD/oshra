<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//google validation catchar================//

Route::post('AddVolunteers','Api\VolunteersContollerApi@store')->name('AddVolunteer');
Route::post('message','Api\MessageControllerApi@store')->name('message');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();





});
