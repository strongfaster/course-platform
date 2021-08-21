@extends('layouts.app')

@section('title','Update course')

@section('content')
    @include('course.form', ['route' => route('course.store', ['id' => $course->id])])
@endsection
