<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Hash;
use Auth;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $user = User::all()->where('id',$id)->first();
        return view('UserProfile.user-profile')->with('user', $user);
    }

    public function change($id)
    {
        $user = User::all()->where('id',$id)->first();
        return view('UserProfile.change-profile')->with('user', $user);
    }

    public function updateUser(Request $request, $id)
    {
        $input = $request->input();
        $user = User::findOrFail($id);
        $user->fill($input);
        $user->save();

        return redirect()->back()->with('message','Готово!');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Ваш текущий пароль не совпадает с тем что вы ввели! Попробуйте еще раз.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Новый пароль не может совпадать с текущим! Нужно выбрать другой пароль.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Пароль успешно изменен!");

    }
}
