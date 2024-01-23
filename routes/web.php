<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $titolo = 'Il mio blog';
    return view('home', ['titolo' => $titolo]);

    
});

Route::get("/articoli", function () {

    $titolo = "Articoli";
    return view ("articoli", ['titolo' => $titolo]);


});

Route::get("/chisono", function () {

    $titolo = "Chi sono";

    $bio = "Sono un programmatore HTML, CSS, JavaScript e PHP Junior e studio presso Aulab.";

    return view ("chisono", ['titolo' => $titolo, 'bio' => $bio]);

});