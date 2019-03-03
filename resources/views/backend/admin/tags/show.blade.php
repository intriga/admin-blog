@extends('backend.index')

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Categorias</h3>

        <a href="{{ route('admin.category') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        <p><strong>Nombre </strong>{{ $category->name }}</p>
        {{-- <p><strong>Slug </strong>{{ $category->slug }}</p> --}}
        <p><strong>body </strong>{{ $category->description }}</p>

      </div>

    </div>
  </div>
@endsection
