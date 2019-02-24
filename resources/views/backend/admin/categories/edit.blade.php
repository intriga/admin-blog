@extends('backend.index')

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Editar categoria</h3>

        <a href="{{ route('admin.category') }}" class="btn btn-default btn-sm pull-right">Listado</a>

      </div>

      <div class="box-body">

        {!! Form::model($category, ['route' => ['admin.category.update', $category->slug], 'method' => 'PUT' ]) !!}
          @include('backend.admin.categories.partials.form')
        {!! Form::close() !!}

      </div>

    </div>
  </div>
@endsection