<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(Request $request){
        Article::create([
            'title' => $request ->title,
            'content' => $request ->content,
            'image' => $request ->image,
            'author' => $request ->author
        ]);

        return view('view');
    }
}
