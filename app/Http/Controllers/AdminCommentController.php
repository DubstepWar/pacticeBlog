<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    public function showPanel()
    {
       $comments = Comment::all();

        return view('AdminPanel.commentsEditing', ['comments' => $comments]);
    }
    public function deleteComm(Comment $comment)
    {

        $comment->delete();

        return redirect()->back();
    }

    public function updateComm(Request $request, $id)
    {
        $input = $request->input();
        $comment = Comment::findOrFail($id);

        $comment->fill($input);
        $comment->comment = $request->input('name');
        $comment->save();


        return redirect(route('admin_com'));
    }

}
