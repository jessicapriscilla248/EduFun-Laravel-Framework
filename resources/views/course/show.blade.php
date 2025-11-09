@extends('layout.master')

@section('konten')


<h3>{{ $course->nama }}</h3>

<div class="row">
  @foreach($course->articles as $article)
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-body">
        <h5>{{ $article->judul }}</h5>
        <p class="small text-muted">{{ $article->created_at->format('d M Y') }} — {{ $article->writer->nama }}</p>
        <p class="card-excerpt">{!! $article->rangkuman !!}</p>
        <a href="{{ route('article.show', urlencode($article->judul)) }}" class="btn btn-sm btn-primary">Read more…</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection