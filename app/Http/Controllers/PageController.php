<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{

    public function seeAll(){
     $articles = Article::paginate(6);
        $pagination = $articles->links('pagination.pagination');
     return view('main')->with(['articles'=>$articles ,'pagination'=> $pagination]);

    }


}
