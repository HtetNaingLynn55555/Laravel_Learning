<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function home(){
        $data = Post::all();

        return view("home",compact("data"));
    }


}
