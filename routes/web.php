<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "Home@index");
Route::get('/home', "Home@index");

Route::group(["prefix" => "owners"], function(){    
    Route::group(["middleware" => "auth"], function() {
        Route::get('create', "Owners@create");
        Route::post('create', "Owners@createPost");
        Route::post('delete/{owner}', "Owners@destroy");
        Route::post('{owner}', "Animals@createPost");
        Route::group(["prefix" => "edit"], function(){
            Route::get('{owner}', "Owners@edit");   
            Route::post('{owner}', "Owners@editPost");
        }); 
    });
    Route::get('index', "Owners@index");
    Route::get('search', "Owners@search");
    Route::get('{owner}', "Owners@show");
});

Route::group(["prefix" => "animals"], function(){
    Route::group(["middleware" => "auth"], function() {
        Route::post('delete/{animal}', "Animals@destroy");
        Route::group(["prefix" => "edit"], function(){
            Route::get('{animal}', "Animals@edit");   
            Route::post('{animal}', "Animals@editPost");
        });

    });
});

Route::group(["prefix" => "treatments"], function(){
    Route::group(["middleware" => "auth"], function() {
        Route::post('delete/{treatment}', "Treatments@destroy");
    });
    Route::get('index', "Treatments@index");
    Route::get('{treatment}', "Treatments@show");
});

Auth::routes(['register' => true]);

