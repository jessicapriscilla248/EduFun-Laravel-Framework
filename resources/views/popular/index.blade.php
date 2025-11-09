@extends('layout.master')
@section('popular', 'disabled')
@section('konten')

    <h3>Popular</h3>    
    <div class="row">
    @foreach($articles as $article)
        <div class="col-md-3">
            <img src="{{ asset('img/background.jpeg') }}" 
                class="img-fluid rounded" 
                alt="Article Image"
                style="height: 150px; object-fit: cover;">
        </div>
        <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h5>{{ $article->judul }}</h5>
                <p class="small text-muted">{{ $article->created_at->format('d M Y') }} | by:{{ $article->writer->nama }}</p>
                <p class="card-excerpt">{!! $article->rangkuman !!}</p>
                <a href="{{ route('article.show', urlencode($article->judul)) }}" class="btn btn-sm btn-primary">Read more…</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $articles->links('pagination::bootstrap-5') }}
    </div>
@endsection