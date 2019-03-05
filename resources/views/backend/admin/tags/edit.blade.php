@extends('backend.index')

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Editar Etiquetas</h3>

        <a href="{{ route('admin.tag') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        {!! Form::model($tag, ['route' => ['admin.tag.update', $tag->slug], 'method' => 'PUT' ]) !!}
          @include('backend.admin.tags.partials.form')
        {!! Form::close() !!}

      </div>

    </div>
  </div>
@endsection