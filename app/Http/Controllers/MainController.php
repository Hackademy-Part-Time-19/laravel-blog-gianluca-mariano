<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $titolo = 'Il mio blog';
        return view('home', ['titolo' => $titolo]);
    }

    public function articles(){

        $titolo = "Articoli";

        $articoli = [0 => ["title" => "PC", "category" => "Elettronica", "description" => "PC molto potente per rendering."], 1 => ["title" => "Borsa", "category" => "Moda", "description" => "Borsa tracolla verde."]];

        //$articoli = [];

        return view("articoli", ['titolo' => $titolo, 'articoli' => $articoli]);

    }

    public function contacts() {

        $titolo = "Chi sono";

        $bio = "Sono un programmatore HTML, CSS, JavaScript e PHP Junior e studio presso Aulab.";

        return view("chisono", ['titolo' => $titolo, 'bio' => $bio]);


    }

    public function article($id) {

        $articoli = [0 => ["title" => "PC", "category" => "Elettronica", "description" => "PC molto potente per rendering."], 1 => ["title" => "Borsa", "category" => "Moda", "description" => "Borsa tracolla verde."]];

        $articolo_interessato = $articoli[$id];

        return view("articolo",['articolo_interessato' => $articolo_interessato]);


    }
}
