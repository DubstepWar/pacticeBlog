<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class AdminCommentsController extends Controller
{
    public function allComments()
    {
       $comments = Comment::all();

        return view('AdminPanel.all-comments', ['comments' => $comments]);
    }

    public function editComment($id){
        $comment = Comment::all()->where('id', $id)->first();
        return view('AdminPanel.edit-comment')->with('comment', $comment);
    }

    public function deleteComment(Comment $comment)
    {

        $comment->delete();

        return redirect(route('allComments'));
    }

    public function updateComment(Request $request, $id)
    {
        $input = $request->input();
        $comment = Comment::findOrFail($id);
        $comment->fill($input);
        $comment->save();

        return redirect()->back()->with('message','Коментарий изменен!');
    }

}
