<?php 

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller {
    public
    function create(ArticleRequest $request) {


        $path = $request -> file('image') -> store('article_images');

        Article::create([
            'title' => $request -> title,
            'content' => $request -> content,
            'image' => $path,
            'author' => $request -> author
        ]);

        return redirect(route('viewHome')) -> with('success', 'create success');
    }
}
