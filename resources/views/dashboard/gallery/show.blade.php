@extends('dashboard.layouts.main')

@section('table')
<h2>{{ $title }}</h2>
<a href="/gallery" class="badge bg-danger text-decoration-none">Kembali</a>
<a href="/gallery/{{ $gallery->id }}/edit" class="badge bg-success mb-4 text-decoration-none">Edit</a>
<div class="row">
    <div class="col-lg-8">
        <div class="card p-0">
            <img src="/img/gallery/{{ $gallery->name }}" class="card-img-top" alt="{{ $gallery->job->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $gallery->job->name }}</h5>
              <p class="card-text">{{ $gallery->note }}</p>
            </div>
          </div>
    </div>
</div>
@endsection