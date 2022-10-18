@extends('dashboard.layouts.main')

@section('table')
<h2 class="mb-4">{{ $title }}</h2>
<div class="table-responsive">
  <a href="/blog/create" class="btn btn-sm btn-primary shadow-none mb-2">Tambah Blog</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">{{ $photo }}</th>
        <th scope="col">{{ $judul }}</th>
        <th scope="col">{{ $type }}</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $blog)
      <tr>
        <td class="align-middle">{{ $loop->iteration }}</td>
        <td class="align-middle">
          <img src="/img/blog/{{ $blog->photo }}" height="35">
        </td>
        <td class="align-middle">{{ $blog->title }}</td>
        <td class="align-middle">{{ $blog->job->name }}</td>
        <td class="text-center align-middle">
          <a href="/blog/{{ $blog->id }}" class="badge bg-success text-decoration-none">Lihat</a>
          <a href="/blog/{{ $blog->id }}/edit" class="badge bg-success text-decoration-none">Edit</a>
          <form action="/blog/{{ $blog->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="badge bg-danger text-decoration-none border-0" onclick="return confirm('Are you sure?')">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection