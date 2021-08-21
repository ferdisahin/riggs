<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function show($slug){
        $cat = Category::where('slug', $slug)->firstOrFail();

        $posts = Post::where('show_home', '!=', 'hide')->where('status', 'publish')->where('cat_id', $cat->id)->orderBy('id', 'desc')->paginate(10);
        return view('index', compact(['posts']));
    }
}
