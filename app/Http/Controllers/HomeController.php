<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $posts = Post::where('show_home', '!=', 'hide')->where('status', 'publish')->orderBy('id', 'desc')->paginate(9);
        return view('index', compact(['posts']));
    }
}
