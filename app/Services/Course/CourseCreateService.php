<?php


namespace App\Services\Course;


use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Services\BaseService;

class CourseCreateService extends BaseService
{
    /**
     * @param CourseRequest $request
     * @return bool
     */
    public static function create(CourseRequest $request){
        $data = $request->validated();
        if(!$request->messages()) {
            return Course::create($data);
        }
        return false;
    }

    /**
     * @param CourseRequest $request
     * @return mixed
     */
    public static function update(CourseRequest $request){
        $validData = $request->validated();
        if(!$request->messages()) {
            $course = Course::findOrFail($request->get('id'));
            if($course){
                $course->update($validData);
            }
            return $course;
        }
        return false;
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function delete($id){
        return Course::findOrFail($id)->delete();
    }
}
