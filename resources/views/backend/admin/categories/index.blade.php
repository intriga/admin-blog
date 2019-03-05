@extends('backend.index')

@push('styles')

<link rel="stylesheet" href="/backend/css/dataTables.bootstrap.min.css">

@endpush

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Categorias</h3>

        <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm pull-right">Crear</a>

      </div>

      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              {{-- <th>ID</th> --}}
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Ver</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          @foreach ($categories as $category)
            <tr>
              {{-- <td>{{ $category->id }}</td> --}}
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td class="text-center">
                <a href="{{ route('admin.category.show', $category->slug) }}" class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
              </td>
                
              <td>
                <a href="{{ route('admin.category.edit', $category->slug) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>  
                
              <td>
                {!! Form::model($category, ['route' => ['admin.category.destroy', $category->id], 'method' => 'DELETE' ]) !!}
                  <button class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i></button>
                {!! Form::close() !!}
              </td>  
                
            </tr>    
          @endforeach

            
        </table>

        {{-- {!! $categories->render() !!} --}}

      </div>

    </div>
  </div>
@endsection

@push('scripts')

<script src="/backend/js/jquery.dataTables.min.js"></script>
<script src="/backend/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
      // $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true
      })
    })
</script>
    
@endpush