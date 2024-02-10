@extends("layout")

@section('title', 'Editar curso')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Editar curso #{{ $curso->id }}</h1>

        <form action="{{ route('cursos.update', $curso) }}" method="post" class="max-w-sm">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <input type="text" name="nome" id="nome" value="{{ $curso->nome }}" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <input type="text" name="descricao" id="descricao" value="{{ $curso->descricao }}" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <input type="text" name="imagem" id="imagem" value="{{ $curso->imagem }}" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <input type="text" name="link" id="link" value="{{ $curso->link }}" required
                       class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Editar curso
            </button>
        </form>

        <a href="{{ route('cursos.index') }}" class="text-blue-500 hover:underline mt-4 block">Volver a cursos</a>
    </div>
@endsection
