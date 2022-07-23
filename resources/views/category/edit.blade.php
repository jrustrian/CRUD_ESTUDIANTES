@extends('layouts.app1')

@section('contents')

    @include('Messages.messages')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('category-update', $category->id_category) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Editar Categoria</h3>



        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$category->description}}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
@endsection
