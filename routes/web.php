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

Route::get('/', function () {
    return view('index');
});


// Catch-All Route
Route::group(['prefix' => ''], function() {

    Route::any('{path?}', function()
    {
        return view("index");
    })->where("path", ".*");

});



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