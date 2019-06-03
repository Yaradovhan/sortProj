<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::with(['subjects', 'users'])->filter($request)->get();
        $subjects = Subject::get()->pluck('name', 'slug');

        return view('courses.index', compact('courses', 'subjects'));
    }

}
