@extends('layout')

@section('title', 'Crear curso')

@section('content')
    <form  method="POST" action="{{route('cursos.store')}}">
            @csrf
            <label class="pt-2">
                Nome:
                <br>
                <input type="text" name="nome" required>
            </label>
            <br>
            <label class="pt-2">
                Descricao:
                <br>
                <textarea name="descricao" required></textarea>
            </label>
            <br>
            <label class="pt-2">
                Imagem:
                <br>
                <input type="text" name="imagem" required>
            </label>
            <br>
            <label class="pt-2">
                Link:
                <br>
                <input type="text" name="link" required>
            </label>
            <br>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear curso</button>
        </form>
@endsection