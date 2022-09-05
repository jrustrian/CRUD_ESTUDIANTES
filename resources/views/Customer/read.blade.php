@extends('layouts.app')

@section('content')
    @include('Messages.messages')
    <h1></h1>

    <h3 class="my-1 text-center">Tabla de Clietes</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Numero de Telefono</th>
                <th scope="col">Creacion</th>
                <th scope="col">Actualizacion</th>
                <th scope="col">Categoria</th>

                <th scope="col">Opciones</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->created_at}}</td>
                    <td>{{ $customer->updated_at}}</td>
                    <td>{{ $customer->category_id}}</td>


                    <td>
                        <form method="POST" action="{{route('customer-delete', $customer->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas Seguro?')"
                                    class="btn btn-danger">Eliminar</button>
                        </form>

                    </td>
                    <td>
                        <form method="GET" action="{{route('customer-edit', $customer->id)}}">
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
