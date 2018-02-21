<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class AdminPostsController extends Controller
{
    public function allPosts()
    {
        $articles = Article::all();
        return view('AdminPanel.all-posts')->with('articles', $articles);
    }

    public function editPost($id)
    {
        $articles = Article::all()->where('id', $id)->first();
        return view('AdminPanel.edit-post')->with('articles', $articles);
    }

    public function addPost()
    {
        $categories = Category::all();
        return view('AdminPanel.add-post')->with('categories', $categories);
    }

    public function storePost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:255',
            'alias' => ['required', 'unique:articles,alias', 'max:30'],
            'description' => 'required | max:255',
            'body' => 'required',
//            'category_id' => 'required',
        ]);
        $data = $request->input();
//        dd($data);
        $article = new Article;
        $article->fill($data);
        $article->save();

        return redirect()->back()->with('message', 'Пост добавлен!');
    }

    public function deletePost(Article $article)
    {
        $article->delete();
        return redirect(route('admin'));
    }

    public function updatePost(Request $request, $id)
    {
        $input = $request->input();
        $article = Article::findOrFail($id);
        $article->fill($input);

        $article->save();

        return redirect()->back()->with('message', 'Пост обновлен!');
    }
}
