<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */


     
    public function index()
    {
        //

        $articles = Article::all();

        return view("articles.index", ['articles' => $articles]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   

        $categories = Category::all();


        return view("articles.create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        if($request->hasFile("image") && $request->file("image")->isValid()) {

            $imagePath = $request->file("image")->storeAs("public/images", $request->file("image")->getClientOriginalName());
            

        } else {

            $imagePath = null;

            auth()->user()->article()->create([

                "title" => $request->input("title"),
                "description" => $request->input("description"),
                "category_id" => $request->input("category_id"),
                "image" => $imagePath,  
                "user_id" =>  auth()->user()->id,    
    
            ]);
    
            


        }

        return back()->with(["uploaded"=>true]);


       
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //

        return view("articles.article",['article' => $article]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //

        $categories = Category::all();

        return view("articles.edit", ["article" => $article, "categories" => $categories]);
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //

        $article->update([

            "title" => $request["title"],
            "description" => $request["description"],
            "category_id" => $request["category_id"],       

        ]);

        return view("articles.article", ["article" => $article]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //

        $article->delete();


        return redirect("articles");
    }
}
