@extends('dashboard.layouts.main')

@section('table')
<h2 class="mb-4">{{ $title }}</h2>
<div class="row">
    <div class="col-lg-8">
        <form action="/gallery" method="post" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="note" class="form-label">Catatan</label>
                <input type="text" class="form-control shadow-none @error('note') is-invalid @enderror" name="note" id="note" required autofocus value="{{ old('note') }}">
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
                        @if(old('type') == $job->id)
                        <option value="{{ $job->id }}" selected>{{ $job->name }}</option>
                        @else
                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                <label for="name" class="form-label d-block">Photo</label>
                <input type="file" name="name" id="name" required>
            </div>
            <a href="/gallery" class="btn btn-danger btn-sm shadow-none">kembali</a>
            <button type="submit" class="btn btn-primary btn-sm shadow-none">Tambah Photo</button>
        </form>
    </div>
</div>
@endsection