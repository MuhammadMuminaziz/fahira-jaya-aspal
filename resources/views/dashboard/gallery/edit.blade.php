@extends('dashboard.layouts.main')

@section('table')
<h2 class="mb-4">{{ $title }}</h2>
<div class="row">
    <div class="col-lg-8">
        <form action="/gallery/{{ $gallery->id }}" method="post" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="note" class="form-label">Catatan</label>
                <input type="text" class="form-control shadow-none @error('note') is-invalid @enderror" name="note" id="note" required autofocus value="{{ old('note', $gallery->note) }}">
                @error('note')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="job_id" class="form-label">Type</label>
                <select class="form-select shadow-none" id="job_id" name="job_id">
                    @foreach($jobs as $job)
                        @if(old('type', $gallery->job_id) == $job->id)
                        <option value="{{ $job->id }}" selected>{{ $job->name }}</option>
                        @else
                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                <label for="name" class="form-label d-block">Photo</label>
                <img src="{{ asset('storage/' . $gallery->name) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="">
                <input type="file" name="name" onchange="previewImage()" id="name">
            </div>
            <a href="/gallery" class="btn btn-danger btn-sm shadow-none">kembali</a>
            <button type="submit" class="btn btn-primary btn-sm shadow-none">Edit</button>
        </form>
    </div>
</div>
@endsection