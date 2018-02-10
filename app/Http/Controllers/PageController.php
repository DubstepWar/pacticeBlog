<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{

    public function seeAll(){
     $articles = Article::all();
     return view('main')->with('articles',$articles);

    }


}
