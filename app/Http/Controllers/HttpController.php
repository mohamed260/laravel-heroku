<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    public function index()
    {
        $url = 'http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=dc541b09899c42ed8fe9abcf935f9a76';
        $posts = Http::get($url)->json();
        return view('posts', compact('posts'));
        // return $posts;
        // dd($posts);
    }
}
