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



Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/articoli', [MainController::class, 'articles'])->name("articoli");

Route::get('/chisono', [MainController::class, 'contacts'])->name("chisono");

Route::get("/articolo/{id}", function ($id) {

    $articoli = [0 => ["title" => "PC", "category" => "Elettronica", "description" => "PC molto potente per rendering."], 1 => ["title" => "Borsa", "category" => "Moda", "description" => "Borsa tracolla verde."]];

    $articolo_interessato = $articoli[$id];

    return view("articolo",['articolo_interessato' => $articolo_interessato]);


})-> name("articolo");