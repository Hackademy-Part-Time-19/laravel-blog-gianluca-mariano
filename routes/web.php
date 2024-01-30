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



Route::get('/', [Main::class, 'index'])->name('home');

Route::get('/articoli', [Main::class, 'articles'])->name("articoli");

Route::get('/chisono', [Main::class, 'contacts'])->name("chisono");
;

Route::get("/chisono", function () {

    $titolo = "Chi sono";

    $bio = "Sono un programmatore HTML, CSS, JavaScript e PHP Junior e studio presso Aulab.";



    return view("chisono", ['titolo' => $titolo, 'bio' => $bio]);

})->name("chisono");

Route::get("/articolo/{id}", function ($id) {

    $articoli = [0 => ["title" => "PC", "category" => "Elettronica", "description" => "PC molto potente per rendering."], 1 => ["title" => "Borsa", "category" => "Moda", "description" => "Borsa tracolla verde."]];

    $articolo_interessato = $articoli[$id];

    return view("articolo",['articolo_interessato' => $articolo_interessato]);


})-> name("articolo");