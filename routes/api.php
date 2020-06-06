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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::get('/v1/items', 'ItemsController@getAllItems');

Route::post('/v1/addItem', 'ItemsController@addItem');

Route::get('/v1/item/{id}', 'ItemsController@getItem');

Route::get('/v1/item_category', 'ItemsController@getAllIItemCategory');

Route::get('/v1/report_status', 'ItemsController@getReportStatus');

Route::get('/v1/event', 'ItemsController@getEvents');
*/
