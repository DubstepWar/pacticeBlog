<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show($id)
    {
        $user = User::all()->where('id',$id)->first();
        return view('user-profile')->with('user', $user);
    }
}
