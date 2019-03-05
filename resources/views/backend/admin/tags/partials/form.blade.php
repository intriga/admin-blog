<div class="form-group">
  {{ Form::label('name', 'Nombre de la etiqueta') }}
  {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
  {{ Form::label('slug', 'Url Amigable') }}
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>

@push('scripts')
  <script src="/backend/js/jquery.stringToSlug.min.js"></script>
  <script>
    $(document).ready( function() {
      $("#name, #slug").stringToSlug({
        callback: function(text){
          $('#slug').val(text);
        }
      });
    });
  </script>
@endpush