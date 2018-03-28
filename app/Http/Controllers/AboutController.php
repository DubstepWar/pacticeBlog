<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts=About::all();
     /*   dd($about);*/

        return view('about')->with('abouts',$abouts);
    }
}
