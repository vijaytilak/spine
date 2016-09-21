<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/{crmId}', function () {
    return view('index');
});



/*
|--------------------------------------------------------------------------
| Catch All Routes for WEB requests
|--------------------------------------------------------------------------
|
| Below route redirects all requests to Angular except for routes to api
| Api routes are defined in api.php
|
*/

Route::any('{catchall}',function ( $catchall ) {
    //dd( $catchall . ' requested' );
    return view('index');
} )->where(['catchall' => '^((?!api).)*$']);


/*
|--------------------------------------------------------------------------
| Blade Config
|--------------------------------------------------------------------------
|
| Changing the Blade tags to <% %> so that Angular can use {{ }} tags
|
 */

Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data


/*
|--------------------------------------------------------------------------
| View Config
|--------------------------------------------------------------------------
|
| Include hbs and html files for views
|
 */
View::addExtension('hbs', 'php');
View::addExtension('html', 'php');