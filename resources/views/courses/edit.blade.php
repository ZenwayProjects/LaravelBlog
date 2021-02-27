@extends('layouts.plantilla')
@section('title', 'Courses Edit')
@section('content')
    <h1>En esta pagina podrás editar un curso</h1>
    <form action="{{route('courses.update', $course)}}" method="POST">
        @csrf

        @method('PUT')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$course->name}}">
        </label>

        <br>
        <label>
            Description:
            <br>
            <textarea rows="5" name="description" >
                {{$course->description}}
            </textarea>
        </label>

        <br>
        <label>
            Category: 
            <br>
            <input type="text" name="category" value="{{$course->category}}">
        </label>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
