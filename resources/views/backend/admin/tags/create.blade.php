@extends('backend.index')

@push('styles')

<link rel="stylesheet" href="/backend/css/dataTables.bootstrap.min.css">

@endpush

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Crear Etiquetas</h3>

        <a href="{{ route('admin.tag') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        {!! Form::open(['route' => 'admin.tag.store']) !!}
          @include('backend.admin.tags.partials.form')
        {!! Form::close() !!}

      </div>

    </div>
  </div>
@endsection