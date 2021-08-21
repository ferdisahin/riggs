<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    public function show($cat, $slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        $category = Category::where('slug', $cat)->firstOrFail();

        if($category->id != $post->cat_id){
            return abort(404);
        }

        return view('single', compact(['post']));
    }
}
