<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

    Route::get('/', 'PagesController@index');
    Route::get('/roleta', 'PagesController@roleta');
