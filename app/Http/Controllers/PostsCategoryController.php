<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PostsCategoryController extends Controller
{
    public function show(Request $request, $alias) {
        $category = Category::all()->where('alias', $alias)->first();

        $catArticles = $category->articles->sortByDesc('created_at');
        return view('categories.postsCategory', [ 'category' => $category, 'catArticles' => $catArticles]);
    }
}
