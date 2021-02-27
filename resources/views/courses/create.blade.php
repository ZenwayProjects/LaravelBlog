@extends('layouts.plantilla')
@section('title', 'Cursos Create')
@section('content')
    <h1>En esta pagina podrás crear un curso</h1>
    <form action="{{route('courses.store')}}" method="POST">
        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Description:
            <br>
            <textarea rows="5" name="description"></textarea>
        </label>

        <br>
        <label>
            Category: 
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
