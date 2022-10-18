@extends('layouts.main')

@section('page')
<div class="card mb-3 mt-5">
    <img src="/img/blog/{{ $blog[0]->photo }}" alt="{{ $blog[0]->job->name }}" class="img-fluid">
    
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/post/{{ $blog[0]->slug }}" class="text-decoration-none text-dark">{{ $blog[0]->title }}</a></h3><small class="text-primary">{{ $blog[0]->created_at->diffForHumans() }}</small>
      <p class="card-text">{{ $blog[0]->excerpt }}</p>
      <a href="/blogs/{{ $blog[0]->slug }}" class="btn btn-primary btn-sm text-decoration-none">Read more</a>
    </div>
  </div>

<div class="container">
    <div class="row">
        @foreach($blog->skip(1) as $bg)
        <div class="col-md-4 col-6 mb-3">
            <div class="card">
                <img src="/img/blog/{{ $bg->photo }}" alt="{{ $bg->job->name }}" class="img-fluid">
                
                <div class="card-body">
                  <h5 class="card-title"><a href="/post/{{ $bg->slug }}">{{ $bg->title }}</a></h5><small class="text-primary">{{ $bg->created_at->diffForHumans() }}</small>
                  <p class="card-text">{{ $bg->excerpt }}</p>
                  <a href="/blogs/{{ $bg->slug }}" class="btn btn-primary btn-sm">read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-end">
  {{ $blog->links() }}
</div>
@endsection