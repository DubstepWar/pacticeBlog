<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Tag;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getPost($alias)
    {
        $article = Article::all()->where('alias', $alias)->first();
        $tags = $article->tags;
        $comments = Comment::all()->where('article_id', $article->id)->sortBy('created_at');
        return view('post')->with(['article' => $article, 'tags' => $tags, 'comments' => $comments]);

    }

    public function comment(Request $request)
    {
     $comment = new Comment;
     $comment->comment = $request['comment'];
     $comment->article_id = $request['article_id'];
     $comment->user_id = Auth::user()->id;
     $comment->save();
     return redirect()->back()->with('massage', 'Комментарий добавлен');
    }

}
