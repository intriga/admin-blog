{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
  {{ Form::label('category_id', 'Categorias') }}
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('title', 'Titulo del Post') }}
  {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>

<div class="form-group">
  {{ Form::label('slug', 'Url Amigable') }}
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
  {{ Form::label('excerpt', 'Descripcion') }}
  {{ Form::textarea('excerpt', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('content', 'Contenido') }}
  {{ Form::textarea('content', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('status', 'Estado') }}
  <label>
    {{ Form::radio('status', 'PUBLISHED') }} Publicado
  </label>
  <label>
    {{ Form::radio('status', 'DRAFT') }} Borrador
  </label>
</div>

<div class="form-group">
  {{ Form::label('tags', 'Etiquetas') }}
  <div>
    @foreach ($tags as $tag)
      <label>
        {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
      </label>
    @endforeach
  </div>
</div>

<div class="form-group">
  {{ Form::label('file', 'Imagen') }}
  {{ Form::file('file') }}
</div>

<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>

@push('scripts')
  <script src="/backend/js/jquery.stringToSlug.min.js"></script>
  <script>
    $(document).ready( function() {
      $("#title, #slug").stringToSlug({
        callback: function(text){
          $('#slug').val(text);
        }
      });
    });
  </script>
@endpush