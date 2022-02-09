<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) {
        $post = Post::where('id',$id)->first();
        //TODO: comment query
        return $post;
    }
}
