@extends('layout')

@section('title', 'Main cursos')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Bienvenido a la pagina principal de cursos</h1>
        <a href="{{ route('cursos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block my-4">Crear curso</a>

        <ul class="list-disc list-inside">
            @foreach ($cursos as $curso)
                <li class="my-2">
                    <a href="{{ route('cursos.show', $curso->id) }}" class="text-blue-500 hover:underline">{{ $curso->nome }}</a>

                    <!-- Formulario de eliminación -->
                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('¿Estás seguro de que deseas eliminar este curso?')">❌</button>
                    </form>
                </li>
            @endforeach
        </ul>

        {{ $cursos->links() }}
    </div>
@endsection
