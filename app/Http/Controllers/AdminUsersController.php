<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function allUsers()
    {
        $users = User::all();
        return view('AdminPanel.all-users')->with('users', $users);
    }

    public function editUser($id)
    {
        $user = User::all()->where('id', $id)->first();
        return view('AdminPanel.edit-user')->with('user', $user);
    }

    public function deleteUser(User $user)
    {

        $user->delete();

        return redirect(route('allUsers'));
    }

    public function updateUser(Request $request, $id)
    {
        $input = $request->input();
        $user = User::findOrFail($id);
        $user->fill($input);
        $user->save();

        return redirect()->back()->with('message', 'Юзер изменен!');
    }
}
