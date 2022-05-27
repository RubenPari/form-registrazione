<?php


use App\Http\Controllers\Candidature;
use Illuminate\Http\Request;


Route::post('/register-candidature', function (Request $request) {
    (new Candidature())->register($request->all());
});
