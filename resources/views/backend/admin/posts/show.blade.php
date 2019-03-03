@extends('backend.index')

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>{{ $post->title }}</h3>

        <a href="{{ route('admin.post') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        <p><strong>Titulo </strong>{{ $post->title }}</p>
        {{-- <p><strong>Slug </strong>{{ $post->slug }}</p> --}}
        <p><strong>Descripcion </strong>{{ $post->excerpt }}</p>
        <p><strong>Contenido </strong>{{ $post->content }}</p>
        <p><strong>Status </strong>{{ $post->status }}</p>
        <img src="{{ $post->file }}" class="img-responsive">        

      </div>

    </div>
  </div>
@endsection
