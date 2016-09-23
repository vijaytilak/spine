<?php

use Illuminate\Http\Request;

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
Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');
Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');

Route::resource('records', 'RecordController');

/*
|--------------------------------------------------------------------------
| Catch All Routes for API requests
|--------------------------------------------------------------------------
|
| Below route redirects all requests to Angular except for routes to api
| Api routes are defined in api.php
|
*/

Route::any( '{catchall}', function ( $page ) {
    //dd( $page . ' requested' );
    return view('index');
} )->where('catchall', '(.*)');


