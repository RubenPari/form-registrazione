<?php


use App\Http\Controllers\Candidature;
use App\Http\Controllers\Tokens;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


Route::post('/register-candidature', function (Request $request) {
    (new Candidature())->register($request->all());
});

Route::post('/api/login', function (Response $response) {
    (new Tokens())->generate($response);
});
