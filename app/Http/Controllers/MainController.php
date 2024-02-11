<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class MainController extends Controller
{
    public function index()
    {
        $titolo = 'Il mio blog';
        return view('home', ['titolo' => $titolo]);
    }

    public function articles(){

        $titolo = "Articoli";

        
        $articoli = Article::all();

        

        //dd($articoli);

        //$articoli = [];

        return view("articoli", ['titolo' => $titolo, 'articoli' => $articoli]);

    }

    public function article($id) {

        

        $articolo_interessato = Article::find($id) ;

        return view("articolo",['articolo_interessato' => $articolo_interessato]);


    }
}
