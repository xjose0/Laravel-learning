@extends('layout')

@section('title', 'Show curso')

@section('content')
    <h1>Bienvenido a la pagina show de cursos {{$curso->id}}</h1>
    
    <ul>
        <li><strong>Nombre: </strong>{{$curso->nome}}</li>
        <li><strong>Descripción: </strong>{{$curso->descricao}}</li>
        <li><strong>Categoría: </strong>{{$curso->imagem}}</li>
    </ul>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>

@endsection