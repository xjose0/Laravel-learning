@extends('layout')

@section('title', 'Página de Inicio')

@section('content')
    <div class="container">
        <h1>Bienvenido a mi sitio web</h1>
        <p>Este es el contenido de la página de inicio.</p>
        <a href="{{route('cursos.index')}}">Ver cursos</a>
    </div>
@endsection
