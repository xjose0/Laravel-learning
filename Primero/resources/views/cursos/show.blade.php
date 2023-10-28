@extends('layout')

@section('title', 'Show curso')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Bienvenido a la página de detalles del curso #{{ $curso->id }}</h1>

        <ul class="list-disc list-inside my-4">
            <li><strong class="font-semibold">Nombre:</strong> {{ $curso->nome }}</li>
            <li><strong class="font-semibold">Descripción:</strong> {{ $curso->descricao }}</li>
            <li><strong class="font-semibold">Categoría:</strong> {{ $curso->imagem }}</li>
        </ul>

        <a href="{{ route('cursos.edit', $curso->id) }}"
           class="text-blue-500 hover:underline mr-2">Editar curso</a>
        <a href="{{ route('cursos.index') }}"
           class="text-blue-500 hover:underline">Volver a cursos</a>
    </div>
@endsection
