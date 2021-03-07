@extends('layouts.plantilla')
@section('title', 'Curso ' . $course->name)
@section('content')
    <h1>Bienvenido al curso de {{$course->name}}</h1>
    <a href="{{route('courses.index')}}">Back to courses</a>
    <br>
    <a href="{{route('courses.edit', $course)}}">Edit Courses</a>
    <h1><strong>Category: </strong>{{$course->category}}</h1>
    <p>Description: {{$course->description}}</p>
    <form action="{{route('courses.destroy', $course)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete Course </button>
    </form>

@endsection

