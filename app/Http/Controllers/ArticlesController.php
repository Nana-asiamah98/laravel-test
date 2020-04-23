<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function show(Article $article){
        return view('articles.show', ['article' => $article]);

    }

    public function index(){

        $articles = Article::latest()->get();

        return view('articles.index',['articles' => $articles]);

    }

    public function create(){
        return view('articles.create');

    }
    public function store(){
        Article::create($this->validateAll());

        return redirect('/articles');
    }

    public function update(Article $article){

        $article->update($this->validateAll());

        return redirect('/articles/'.$article->id);
    }

    public function edit(Article $article){

        return view('articles.edit',compact('article'));
    }

    public function destroy(){

    }

    protected function validateAll(){
        return  request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
    
}
