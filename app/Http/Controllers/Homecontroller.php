<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class Homecontroller extends Controller
{
    //
    public function getAllArticle(){
        $articles = Article::all();


        // return an array articles on home
        return view('home',compact('articles'));
    }
}
