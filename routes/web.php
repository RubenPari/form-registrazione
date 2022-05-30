<?php

use Illuminate\Support\Facades\Route;

/**
 * Form page => /
 */
Route::get('/', function () {
    return view('register_form');
});

/**
 * Admin page => /admin
 */
Route::get('/admin-candidate', function () {
    return view('admin_candidate');
})->middleware('loginDashboard');

/**
 * Admin login => /admin-login
 */
Route::get('/admin-login', function () {
    return view('admin_login');
});
