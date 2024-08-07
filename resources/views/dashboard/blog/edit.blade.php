@extends('dashboard.layouts.main')

@section('table')
<h2 class="mb-4">{{ $title }}</h2>
<div class="row">
    <div class="col-lg-8">
        <form action="/blog/{{ $blog->id }}" method="post" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control shadow-none @error('title') is-invalid @enderror" name="title" id="title" required value="{{ old('title', $blog->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Blog</label>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $blog->body) }}" required>
                <trix-editor input="body"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="job_id" class="form-label">Type</label>
                <select class="form-select shadow-none" id="job_id" name="job_id">
                    @foreach($jobs as $job)
                        @if(old('type', $blog->job_id ) == $job->id)
                        <option value="{{ $job->id }}" selected>{{ $job->name }}</option>
                        @else
                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                <label for="photo" class="form-label d-block">Photo</label>
                <img src="{{ asset('storage/' . $blog->photo) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="">
                <input type="file" name="photo" id="photo">
            </div>
            <a href="/blog" class="btn btn-danger btn-sm shadow-none">kembali</a>
            <button type="submit" class="btn btn-primary btn-sm shadow-none">Edit Blog</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection