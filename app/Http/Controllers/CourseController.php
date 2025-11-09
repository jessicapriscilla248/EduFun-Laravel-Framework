<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//jgn lupa
use App\Models\Course;
use App\Models\Article;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function show($id){
        $course = Course::with('articles.writer')->findOrFail($id);
        return view('course.show', compact('course'));
    }
}
