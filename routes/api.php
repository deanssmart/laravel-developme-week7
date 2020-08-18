<?php

use App\Http\Controllers\API\Owners;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "owners"], function(){
    Route::get("", [Owners::class, "index"]);
    Route::post("", [Owners::class, "store"]);
    Route::group(["prefix" => "{owner}"], function(){
        Route::get("", [Owners::class, "show"]);
        Route::put("", [Owners::class, "update"]);
        Route::delete("", [Owners::class, "destroy"]);       
    });
});


