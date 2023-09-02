<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//外部にあるPostクラスをインポート

class PostController extends Controller
{
    public function index(Post $post)
    {
    return $post->get();
    }
}