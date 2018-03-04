<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 04.03.2018
 * Time: 17:18
 */

namespace App\Helpers;
use Illuminate\Http\Request;

class ImageDownload
{

    static function getArrForPost(Request $request)
    {
        if ($request->hasFile('img')) {
            $request->file('img')->move(public_path('/images'), $request->file('img')->getClientOriginalName());

            $data = $request->except(['img', 'tags']);

            $data['img'] = $request->file('img')->getClientOriginalName();
            //dd($data);

            return $data ;
        }
        else
        {
            $data = $request->input();
            return $data;
        }
    }

}