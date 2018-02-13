<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showPanel()
    {
        $articles = Article::all();
        return view('AdminPanel.postsEditing')->with('articles', $articles);
    }

    public function addPost()
    {
        return view('AdminPanel.add-post');
    }

    public function storePost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:255',
            'alias' => ['required', 'unique:articles,alias', 'max:30'],
            'description' => 'required | max:255',
            'body' => 'required',
            'category_id' => 'required',
        ]);
        $data = $request->input();
        $article = new Article;
        $article->fill($data);
        $saved = $article->save();

        return redirect()->back()->with('message', 'Пост добавлен!');
    }
}
