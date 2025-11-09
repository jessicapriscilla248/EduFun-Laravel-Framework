@extends('layout.master')
@section('title', 'Home')
@section('home', 'disabled')

@section('konten')
<div class="hero mb-4 position-relative">
<div class="container-fluid p-0">
    <img src="{{ asset('img/background.jpeg') }}" 
        class="img-fluid w-100" 
        style="height: 300px; object-fit: cover;" 
        alt="EduFun Background">
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
    <h1 class="display-4 fw-bold">EduFun</h1>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <h3>Artikel Terbaru</h3>
        <div class="row">
        @foreach($latest as $article)
            <div class="row mb-4">
                <div class="col-md-3">
                    <img src="{{ asset('img/background.jpeg') }}" 
                        class="img-fluid rounded" 
                        alt="Article Image"
                        style="height: 150px; object-fit: cover;">
                </div>
            
                <div class="col-md-9">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->judul }}</h5>
                            <p class="card-text text-muted small">
                                {{ $article->created_at->format('d M Y') }} | by: 
                                {{ $article->writer->nama }}
                            </p>
                            <p class="card-text card-rangkuman">{{ $article->rangkuman}}..</p>
                            <a href="{{ route('article.show', $article->judul) }}" class="btn btn-sm btn-primary">Read more…</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection