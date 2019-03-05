@extends('backend.index')

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Etiquetas</h3>

        <a href="{{ route('admin.tag') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        <p><strong>Nombre </strong>{{ $tag->name }}</p>
        {{-- <p><strong>Slug </strong>{{ $tag->slug }}</p> --}}        

      </div>

    </div>
  </div>
@endsection
