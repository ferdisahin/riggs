<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller{
    public function index(Request $request){
        $posts = Post::where("title", "LIKE", "%" . $request->kelime . "%")->paginate(10);
        return view('index', compact(['posts']));
    }
}
