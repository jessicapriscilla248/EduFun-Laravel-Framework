<?php

namespace App\Http\Controllers;

//jgn lupa
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function show($judul){
        $article = Article::where('judul', $judul)->with('writer','course')->firstOrFail();

        return view('article.show', compact('article'));
    }
}
