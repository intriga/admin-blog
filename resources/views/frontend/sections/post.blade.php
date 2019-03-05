@extends('frontend.index')

@section('content')

  <div class="card mb-4">
    <img class="card-img-top img-responsive" src="{{ $post->file }}" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title">{{ $post->title }}</h2>
      <p class="card-text">{{ $post->excerpt }}</p>
      <p class="card-text">{{ $post->content }}</p>
      <a href="{{ route('blog') }}" class="btn btn-primary">Listado</a>
    </div>
    {{-- <div class="card-footer text-muted">
      Posted on January 1, 2017 by
      <a href="#">Start Bootstrap</a>
    </div> --}}
  </div>

@endsection
