@extends('layouts.app1')

@section('contents')


    <form class="w-50 mx-auto mt-5 pt-5" action="{{route('category-create')}}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro de Categorias</h3>
        @include('Messages.messages')


        <div class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" class="form-control {{$errors->has('description')? 'is-invalid':''}}" name="description" id="description"
                   value="{{isset($category->description)?$category->description:old('description') }}">
        </div>




        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

@endsection
