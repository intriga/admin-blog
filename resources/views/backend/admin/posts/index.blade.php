@extends('backend.index')

@push('styles')

<link rel="stylesheet" href="/backend/css/dataTables.bootstrap.min.css">

@endpush

@section('content')
  <div class="col-md-12">
    <div class="box">
      
      <div class="box-header">
        <h3>Post</h3>

        <a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-sm pull-right">Crear</a>

      </div>

      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              {{-- <th>ID</th> --}}
              <th>Titulo</th>
              <th>Descripcion</th>
              <th>Ver</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          @foreach ($posts as $post)
            <tr>
              {{-- <td>{{ $post->id }}</td> --}}
              <td>{{ $post->title }}</td>
              <td>{{ $post->excerpt }}</td>
              
              <td>
                <a href="{{ route('admin.post.show', $post->slug) }}" class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>                              
                
              </td>

              <td class="text-center">
                <a href="{{ route('admin.post.edit', $post->slug) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>

              <td class="text-center">
                {!! Form::model($post, ['route' => ['admin.post.destroy', $post->id], 'method' => 'DELETE' ]) !!} 
                  <button class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i></button>
                {!! Form::close() !!}  
              </td>
            </tr>    
          @endforeach

            
        </table>

        {{-- {!! $posts->render() !!} --}}

      </div>

    </div>
  </div>
@endsection

@push('scripts')

<script src="/backend/js/jquery.dataTables.min.js"></script>
<script src="/backend/js/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
      $('#example1').DataTable()
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