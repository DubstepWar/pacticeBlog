<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class AdminTagController extends Controller
{
    public function createTag(Request $request)
    {

        $this->validate($request, [
            'tag' => 'required',
            'alias' => 'required'
        ]);

        $tag = Tag::create([
            'name' => $request->input('tag'),
            'alias' => $request->input('alias')
        ]);

        return redirect()->back()->with('message', 'Тег добавлен');
    }

    public function deleteTag(Request $request)
    {
        $tag = Tag::findOrFail($request->input('tagDelete'));
        $tag->delete();
        return redirect(route('addPost'));
    }

}