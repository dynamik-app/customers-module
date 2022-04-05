<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/customers', function (Request $request) {
    return $request->user();
});