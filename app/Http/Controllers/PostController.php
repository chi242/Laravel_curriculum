<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PostController extends Controller
{
    public function index(Post $post)
    {
    return $post->get();
    }
}

