<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class PopularController extends Controller
{
    //
    public function index(Request $request){
        $articles = Article::inRandomOrder()->paginate(3);
        return view('popular.index', compact('articles'));
    }
}
