@extends('frontend.index')

@section('content')

@foreach ($posts as $post)
  <div class="card mb-4">
    <img class="card-img-top img-responsive" src="{{ $post->file }}" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title">{{ $post->title }}</h2>
      <p class="card-text">{{ $post->excerpt }}</p>
      <a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Ver mas &rarr;</a>
    </div>
    <div class="card-footer text-muted">
      Posted on January 1, 2017 by
      <a href="#">Start Bootstrap</a>
    </div>
  </div>
@endforeach

<!-- Pagination -->
{!! $posts->render() !!}

{{-- <ul class="pagination justify-content-center mb-4">
  <li class="page-item">
    <a class="page-link" href="#">&larr; Older</a>
  </li>
  <li class="page-item disabled">
    <a class="page-link" href="#">Newer &rarr;</a>
  </li>
</ul> --}}

@endsection