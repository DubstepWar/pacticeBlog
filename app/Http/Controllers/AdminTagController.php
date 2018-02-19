<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class AdminTagController extends Controller
{
    public function createTag (Request $request) {


        $this->validate($request, [
            'tag' => 'required'
        ]);

        $tag = Tag::create([
            'name' => $request->input('tag'),
        ]);

        return redirect()->back()->with('message', 'Тег добавлен');
    }



}