<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::get_articles();
        return view('article.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::get_article($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        return view('article.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Article::create_article($data);

        return redirect('/artikel');
    }

    public function edit($id)
    {
        $article = Article::get_article($id);
        return view('article.edit', compact('article'));
    }

    public function update($id, Request $request)
    {
        Article::update_article($id, $request);
        return redirect('/artikel/' . $id);
    }

    public function destroy($id)
    {
        Article::destroy_article($id);
        return redirect('/artikel');
    }
}
