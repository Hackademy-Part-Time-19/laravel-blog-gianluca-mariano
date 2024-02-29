<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use App\Providers\FortifyServiceProvider;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

//Route::get('/articoli', [MainController::class, 'articles'])->name("articoli");

Route::get('/chisono', [ContactController::class, 'contacts'])->name("chisono");
Route::post('/chisono', [ContactController::class, 'sendMail'] )->name("chisonopost");

//Route::get("/articolo/{id}", [MainController::class, 'article'])-> name("articolo");

/* //Route::get("/makearticles", function () {

    Article::create([

        "title" => "Borsa Prada",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis libero id ducimus veniam beatae optio quae ipsam impedit nisi, deleniti saepe quos, nihil dicta praesentium hic aperiam, iste dolorem eum!", 
        "category" => "Vestiti",
        "body" => "Body",

    ]);

    Article::create([

        "title" => "Computer fisso",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis libero id ducimus veniam beatae optio quae ipsam impedit nisi, deleniti saepe quos, nihil dicta praesentium hic aperiam, iste dolorem eum!", 
        "category" => "Elettronica",
        "body" => "Body",

    ]);

    Article::create([

        "title" => "Iphone 13",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis libero id ducimus veniam beatae optio quae ipsam impedit nisi, deleniti saepe quos, nihil dicta praesentium hic aperiam, iste dolorem eum!", 
        "category" => "Elettronica",
        "body" => "Body",

    ]);

    return route("home");

//}); */

//Route::get("/login", [FortifyServiceProvider::class, 'boot']);


Route::middleware("auth")->group(function () {

    Route::get("/profile", [App\Http\Controllers\ProfileController::class, "index"]);

    Route::resource('categories', CategoryController::class);

    Route::resource('articles', ArticleController::class);


});

Route::get("/searchusers",[function () {
    
    return view("searchview");


}]);

