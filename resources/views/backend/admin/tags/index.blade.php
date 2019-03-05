@extends('backend.index')

@push('styles')

<link rel="stylesheet" href="/backend/css/dataTables.bootstrap.min.css">

@endpush

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Etiquetas</h3>

        <a href="{{ route('admin.tag.create') }}" class="btn btn-primary btn-sm pull-right">Crear</a>

      </div>

      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              {{-- <th>ID</th> --}}
              <th>Nombre</th>
              <th>Ver</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          @foreach ($tags as $tag)
            <tr>
              {{-- <td>{{ $tag->id }}</td> --}}
              <td>{{ $tag->name }}</td>
              
              <td>
                <a href="{{ route('admin.tag.show', $tag->slug) }}" class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                
              </td>
              
              <td>
                <a href="{{ route('admin.tag.edit', $tag->slug) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>
                
                <td>
                  {!! Form::model($tag, ['route' => ['admin.tag.destroy', $tag->id], 'method' => 'DELETE' ]) !!}
                    <button class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i></button>
                  {!! Form::close() !!}
                </td>
                
              
            </tr>    
          @endforeach

            
        </table>

        {{-- {!! $tags->render() !!} --}}

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
        'autoWidth': false
      })
    })
</script>
    
@endpush