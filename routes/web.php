<?php

use Illuminate\Support\Facades\Route;

/**
 * Form page => /
 */
Route::get('/', function () {
    return view('register_form');
});
