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

}
