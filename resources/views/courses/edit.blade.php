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
            <input type="text" name="name" value="{{old('name', $course->name)}}">
        </label>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
            
        @enderror
        <br>
        <label>
            Description:
            <br>
            <textarea rows="5" name="description" >
                {{old('description', $course->description)}}
            </textarea>
        </label>
        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
            
        @enderror
        <br>
        <label>
            Category: 
            <br>
            <input type="text" name="category" value="{{old('category', $course->category)}}">
        </label>
        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
            
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
