<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        $author = Author::all();

        return response()->json([
            "success" =>true,
            "message" => "Get All Resorce",
            "data" => $author
        ], 200);
    }   
}
