@extends('layout.master')
@section('writers', 'disabled')
@section('konten')

<h1>Our Writers:</h1>
<div class="row">
@foreach($writers as $writer)
    <div class="col-md-4 mb-3">
        <div class="card text-center">
        <div class="card-body">
            <img src="{{ asset('img/background.jpeg') }}" class="rounded-circle mb-2" width="200" alt="">
            <h5 class="card-title">{{ $writer->nama }}</h5>
            <p class="text-muted">Spesialis {{ $writer->spesialis }}</p>
            <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-sm btn-primary">Lihat Materi</a>
        </div>
        </div>
    </div>
@endforeach
</div>
@endsection