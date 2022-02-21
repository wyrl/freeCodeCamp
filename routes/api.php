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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/whoami', function(){
    return [
        'ipaddress' => $_SERVER['REMOTE_ADDR'],
        'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
        'software' => $_SERVER['HTTP_USER_AGENT']
    ];
});
