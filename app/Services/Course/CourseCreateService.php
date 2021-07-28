<?php


namespace App\Services\Course;


use App\Http\Requests\CourseRequest;
use App\Services\BaseService;

class CourseCreateService extends BaseService
{
    public static function create(CourseRequest $request){
        $valid = $request->validated();
    }
}
