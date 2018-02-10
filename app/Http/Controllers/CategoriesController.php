<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function show() {
        $categories = Category::all()->sortBy('name');
        return view('categories.categories', ['categories' => $categories]);
    }
}
