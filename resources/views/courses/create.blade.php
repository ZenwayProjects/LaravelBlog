@extends('layouts.plantilla')
@section('title', 'Cursos Create')
@section('content')
    <h1>En esta pagina podrás crear un curso</h1>
    <form action="{{route('courses.store')}}" method="POST">
        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea rows="5" name="description">{{old('description')}}</textarea>
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
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
            
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
