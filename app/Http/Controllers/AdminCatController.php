<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 19.02.2018
 * Time: 21:00
 */

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class AdminCatController extends Controller
{
    public function createCat(Request $request) {



        $this->validate($request, [
            'cat' => 'required'
        ]);

        $category = Category::create([
            'name' => $request->input('cat'),
        ]);

        return redirect()->back()->with('message', 'Категория добавлена');
    }
}