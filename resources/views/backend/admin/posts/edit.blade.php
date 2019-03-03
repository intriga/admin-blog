@extends('backend.index')

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Editar post</h3>

        <a href="{{ route('admin.post') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        {!! Form::model($post, ['route' => ['admin.post.update', $post->slug], 'method' => 'PUT' ]) !!}
          @include('backend.admin.posts.partials.form')
        {!! Form::close() !!}

      </div>

    </div>
  </div>
@endsection