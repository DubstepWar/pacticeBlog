<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagPostsController extends Controller
{
    public function show(Request $request,  $id) {
        $tag = Tag::all()->where('id', $id)->first();
        $posts = $tag->articles->sortByDesc('created_at');

        return view('tags.tagPosts', ['tag' => $tag, 'posts' => $posts]);
    }
}
