@extends('layout.master')

@section('konten')
<div class="row">
    <div class="hero mb-4 position-relative">
        <div class="container-fluid p-0">
            <img src="{{ asset('img/background.jpeg') }}" 
                class="img-fluid w-100" 
                style="height: 300px; object-fit: cover;" 
                alt="EduFun Background">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white"></div>
        </div>
    </div>

    <div class="col-md-12">
        <h2>{{ $article->course->nama }}</h2>
        <p class="text-muted small">{{ $article->created_at->format('d M Y') }} | by: {{ $article->writer->nama }}</p>

        <div class="content">{{$article->konten}}</div>
    </div>

  
</div>
@endsection