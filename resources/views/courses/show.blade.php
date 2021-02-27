@extends('layouts.plantilla')
@section('title', 'Curso ' . $course->name)
@section('content')
    <h1>Bienvenido al curso de {{$course->name}}</h1>
    <a href="{{route('courses.index')}}">Volver a los cursos</a>
    <br>
    <a href="{{route('courses.edit', $course)}}">Editar Curso</a>
    <h1><strong>Category:</strong>{{$course->category}}</h1>
    <h1><strong>Description:</strong>{{$course->description}}</h1>

@endsection

