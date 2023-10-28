@extends('layout')

@section('title', 'Crear curso')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Crear un nuevo curso</h1>
        <form method="POST" action="{{ route('cursos.store') }}" class="max-w-sm">
            @csrf
            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" name="nome" id="nome" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <label for="descricao" class="block text-sm font-medium text-gray-700">Descripción:</label>
                <textarea name="descricao" id="descricao" required
                          class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300"></textarea>
            </div>
            <div class="mb-4">
                <label for="imagem" class="block text-sm font-medium text-gray-700">Imagen:</label>
                <input type="text" name="imagem" id="imagem" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-gray-700">Enlace:</label>
                <input type="text" name="link" id="link" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Crear curso
            </button>
        </form>
    </div>
@endsection
