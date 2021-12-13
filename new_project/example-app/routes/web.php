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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::match(['get', 'post'], function(){
    return "Hello World";
});

Route::any('/', function (){
    return "Hi All";
});*/

Route::get("/here", function (){
    return 'here';
});

Route::get("/there", function (){
    return 'there';
});


Route::redirect('/here', '/there');

Route:: view('/welcome', 'welcome');


Route::get('/user/{id}/{name}', function ($id, $name){
    return "User - " .$id .", Name - " . $name;
});


