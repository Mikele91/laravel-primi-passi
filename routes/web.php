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

Route::get('/', function () {
    $data =[
        "nome"=> "michele",
        "cognome"=>"amoruso",
        "linguaggiStudiati"=>["javascript", "php"],
    ];

    return view('home', $data);

});

Route::get('/chi-siamo', function () {
    $data =[
        "nome"=> "michele",
        "cognome"=>"amoruso",
        "email" => "michele@live.com",
        "framework"=>["Vue JS", "laravel"],

    ];
    return view('chi-siamo', $data);
});
