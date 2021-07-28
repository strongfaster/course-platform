<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Services\Course\CourseCreateService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $req){
        return view('course.create');
    }


    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $req){
        return view('course.index', ['courses' => Course::all()]);
    }

    public function store(Request $req){
        CourseCreateService::create(CourseRequest::createFrom($req));
    }
}
