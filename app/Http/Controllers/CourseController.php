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

    /**
     * @param CourseRequest $req
     */
    public function store(CourseRequest $req){
        if($req->get('id')){
            $isSaved = CourseCreateService::update($req);
        }else{
            $isSaved = CourseCreateService::create($req);
        }
        if($isSaved){
            return back();
        }
        return redirect()->route('course.index');
    }

    public function update(Request $req, $id){
        return view('course.update', ['course' => Course::findOrFail($id)]);
    }

    public function delete(Request $req, $id){
        CourseCreateService::delete($id);
        return redirect()->route('course.index');
    }
}
