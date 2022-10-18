@extends('dashboard.layouts.main')

@section('table')
<h2 class="mb-3">{{ $title }}</h2>
<a href="/blog" class="badge bg-danger text-decoration-none">Kembali</a>
<a href="/blog/{{ $blog->id }}/edit" class="badge bg-success mb-2 text-decoration-none">Edit</a>
<div class="row">
    <div class="col">
        <div class="card">
            <img src="/img/blog/{{ $blog->photo }}" class="card-img-top" alt="{{ $blog->job->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="fw-bold">{{ $blog->job->name }}</p>
                <p class="card-text">{!! $blog->body !!}</p>
            </div>
          </div>
    </div>
</div>
@endsection