<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AdminStaticController extends Controller
{
    public function aboutView(){
        $abouts = About::all();
        return view('AdminPanel.seeAbout')->with('abouts', $abouts);
    }

    public function editAbout($id){
        $text = About::all()->where('id', $id)->first();
        return view('AdminPanel.edit-about')->with('text', $text);
    }

    public function updateAbout(Request $request, $id)
    {
        $input = $request->input();
        $about = About::findOrFail($id);
        $about->fill($input);
        $about->save();

        return redirect()->back()->with('message','Информация изменена!');
    }
}
