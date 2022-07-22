@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('customer-update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Editar cliente</h3>
        @include('Messages.messages')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$customer->name}}">
        </div>

        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$customer->address}}" >
        </div>


        <div class="form-group">
            <label for="phone_number">Numero de Telefono</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number" value="{{$customer->phone_number}}">
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control form-control-lg"  >
                <option selected>selecione</option>
                @foreach ( $categorys as $category)
                    @if ($category->id_category == $customer->category_id )
                        <option value="{{ $category->id_category }}" selected>{{ $category->description}}</option>

                    @else
                        <option value="{{ $category->id_category }}">{{ $category->description }}</option>

                    @endif
                @endforeach
            </select>
        </div>




        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
