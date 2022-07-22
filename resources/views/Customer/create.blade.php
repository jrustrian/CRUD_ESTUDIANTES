@extends('layouts.app')


@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('customer-create') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Clientes</h3>
        @include('Messages.messages')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
                   value="{{isset($customer->name)?$customer->name:old('name') }}">
        </div>

        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control {{$errors->has('address')? 'is-invalid':''}}" name="address" id="address"
                   value="{{isset($customer->address)?$customer->address:old('address') }}" >
        </div>


        <div class="form-group">
            <label for="phone_number">Numero de Telefono</label>
            <input type="number" class="form-control {{$errors->has('phone_number')? 'is-invalid':''}}" name="phone_number" id="phone_number"
                   value="{{isset($customer->phone_number)?$customer->phone_number:old('phone_number') }}">
        </div>

        <div class="form-group hidden">
            <label for="name">Categoria</label>
            <select name="category_id" id="category_id" class="form-control form-control-lg"
                    value="{{isset($customer->category_id)?$customer->category_id:old('category_id') }}">
                <option selected>selecione</option>
                @foreach ($categorys as $category)

                    <option value="{{ $category->id_category }}">{{ $category->description }}</option>

                @endforeach

            </select>
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


@endsection


