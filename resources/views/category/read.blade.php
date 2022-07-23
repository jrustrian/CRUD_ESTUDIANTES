@extends('layouts.app1')

@section('contents')
    @include('Messages.messages')
    <h1></h1>
    <h3 class="my-1 text-center">Tabla de Categorias</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descripcion</th>


                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categorys as $category)
                <tr>
                    <th scope="row">{{ $category->id_category }}</th>
                    <td>{{ $category->description }}</td>


                    <td>
                        <form method="POST" action="{{ route('category-delete', $category->id_category) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas Seguro?')"
                                    class="btn btn-danger">Eliminar</button>
                        </form> <form method="GET" action="{{ route('category-edit', $category->id_category) }}">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
