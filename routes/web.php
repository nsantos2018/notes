<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    echo "<h1>Meu estudo em Laravel!</h1>";
});

//sem parâmetros
//Route::get('/main', [MainController::class, 'index']);

//com parâmetros 
Route::get('/main/{value}', [MainController::class, 'index']);