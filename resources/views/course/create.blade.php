@extends('layouts.app')

@section('title','Create course')

@section('content')
    @include('course.form', ['route' => route('course.store')])
@endsection
