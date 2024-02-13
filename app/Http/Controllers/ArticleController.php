<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Validation\Validator;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    
    function create () {

        return view("createarticle");


    }

    function store (StoreArticleRequest $request) { 
        
        if($request->hasFile("image") && $request->file("image")->isValid()) {

            $imagePath = $request->file("image")->storeAs("public/images", $request->file("image")->getClientOriginalName());
            

        }


        Article::create([

            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "category" => $request->input("category"),
            "image" => $imagePath,            

        ]);

        return back()->with(["uploaded"=>true]);
    }

}
