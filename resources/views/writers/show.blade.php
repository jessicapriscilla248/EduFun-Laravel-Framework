@extends('layout.master')

@section('konten')
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('img/background.jpeg') }}" 
                class="img-fluid rounded" 
                alt="Article Image"
                style="height: 150px; object-fit: cover;">
        </div>
        <div class="col-md-9">
            <h4 class="mt-2">{{ $writer->nama }}</h4>
            <p class="text-muted">Spesialis {{ $writer->spesialis }}</p>
        </div>
        
        <div class="col-md-12">
            @foreach($writer->articles as $article)
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
             @endforeach
        </div>
    </div>
@endsection