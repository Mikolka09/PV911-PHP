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

Route::get('/bot', function (){
    $message='Welcome to My_Step_Bot!!!';

    $key='5011562936:AAHLzevapYU_CzvbSEzWfY8TDqM6CvXkMck';
    $url="https://api.telegram.org/bot$key/sendMessage";
    $data=[
      'chat_id'=>1485816892,
        'text'=>$message
    ];
    $answer=\Illuminate\Support\Facades\Http::post($url, $data);
    return dd($answer);
});

Route::get('/', function () {
    return view('welcome');
});
