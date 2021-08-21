@extends('layouts.app')

@section('title','Course list')

@section('content')
    <div class="row">
        <div class="offset-2 col-8">
            <h3>{{__('Course List')}}</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{__('Id')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Description')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->description}}</td>
                        <td>
                            <a href="{{route('course.update', ['id' => $course->id])}}" class="btn btn-primary">{{__('Update')}}</a>
                            <a href="{{route('course.delete', ['id' => $course->id])}}" class="btn btn-danger">{{__('Delete')}}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
