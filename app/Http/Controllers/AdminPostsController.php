<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Helpers\ImageDownload;
use App\Tag;
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
        $categories = Category::all();
        return view('AdminPanel.edit-post')->with(['articles' => $articles, 'categories' => $categories]);
    }

    public function addPost()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('AdminPanel.add-post')->with(['categories' => $categories, 'tags' => $tags]);
    }


    public function storePost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:255',
            'alias' => ['required', 'unique:articles,alias', 'max:50'],
            'description' => 'required | max:255',
            'body' => 'required',
        ]);

        if ($request->isMethod('post')) {

            $article = new Article;

            $data = ImageDownload::getArrForPost($request);

            $article->fill($data);
            $article->save();

            $dataArr = $request->except(['name', 'alias', 'description', 'body', 'category_id', 'img']);
            $dataArr['tags'] = $request['tags'];
            $tagsID = $dataArr['tags'];

            $article->tags()->attach($tagsID);
        }

        return redirect()->back()->with('message', 'Пост добавлен!');
    }

    public function deletePost(Article $article)
    {
        $article->delete();
        return redirect(route('admin'));
    }

    public function updatePost(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required | max:255',
            'alias' => ['required', 'max:50'],
            'description' => 'required | max:255',
            'body' => 'required',
        ]);

        $article = Article::findOrFail($id);

        $data = ImageDownload::getArrForPost($request);

        $article->fill($data);
        $article->save();


        return redirect()->back()->with('message', 'Пост обновлен!');
    }

}
