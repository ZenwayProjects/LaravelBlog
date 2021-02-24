<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::paginate();
        

        return view('courses.index', compact('courses'));
    }

    public function create(){   
        return view('courses.create');
    }

    public function show($id){

        $course = Course::find($id);

        return view('courses.show', compact('course'));
    }
}