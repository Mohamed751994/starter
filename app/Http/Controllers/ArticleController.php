<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }


    public function create()
    {
        return view('articles.create');
    }


    public function store(Article $article)
    {
        $article->create($this->validateData());


        return redirect(route('articles.index'));


    }


    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }


    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }


    public function update(Article $article)
    {
      $article->update($this->validateData());

      return redirect(route('articles.index'));

    }


    public function destroy(Article $article)
    {
        //
    }


    protected function validateData()
    {
      return request()->validate([
        'title'       => 'required',
        'description' => 'required'
      ]);
    }


}
