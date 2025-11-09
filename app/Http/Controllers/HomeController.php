<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//jgn lupa 
use App\Models\Article;
use App\Models\Course;

class HomeController extends Controller
{
    //
    public function index(){
        $latest = Article::orderBy('created_at','desc')->take(5)->with('writer','course')->get();
        $courses = Course::all();
        return view('home', compact('latest','courses'));
    }

}
