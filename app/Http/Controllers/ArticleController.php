<?php 

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller {

    public function show()
    {
        $articles = Article::paginate(5);
        return view('viewHome', compact('articles'));
    }
    
    public function create(ArticleRequest $request) {
        $path = $request -> file('image') -> store('article_images');

        Article::create([
            'title' => $request -> title,
            'content' => $request -> content,
            'image' => $path,
            'author' => $request -> author
        ]);

        return $this->show() -> with('success', 'create success');
    }
}
