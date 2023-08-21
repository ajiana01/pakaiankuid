<?php

namespace App\Http\Controllers;

use App\Models\Tesell_clothes;
use Illuminate\Http\Request;

class tesellController extends Controller
{
    function getAllTesellClothes(){
        $clothes = Tesell_clothes::all();
    }

    function findTesellClothesById( Request $request ){
        $id = $request->id;
        $clothes = Tesell_clothes::where('id', '=', $id);
    }

    function postTesellClothes( Request $request ){
        $clothes = [
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'size' => $request->size,
            'colour' => $request->colour,
            'price' => $request->price,
            'category' => $request->category,
        ];

        Tesell_clothes::create($clothes);
    }
}
