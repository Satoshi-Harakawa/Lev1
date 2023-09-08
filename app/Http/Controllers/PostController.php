<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//外部にあるPostクラスをインポート

class PostController extends Controller
{
    public function index(Post $post)
    {
    return view('posts/index') -> with(['posts' => $post -> get()]);    //'posts'は定義した変数、$postsはmysqlのテーブル名、get()は全データを配列に入れる//
    }                                                                   //withを使えば名前を指定してデータを呼び出せる//
}