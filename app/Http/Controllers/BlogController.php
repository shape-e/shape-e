<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    


    public function index(){

        $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(10)
        ;
        return view('blog/blog', compact('posts'));
    }

    public function post($url){

        $posts = DB::table('posts')->where('url', '=', $url)->first();
        return view('blog/post', compact('posts'));
    }

}
