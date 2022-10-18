@extends('dashboard.layouts.main')

@section('table')
<h2>{{ $title }}</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">{{ $photo }}</th>
        <th scope="col">{{ $nama }}</th>
        <th scope="col">{{ $komentar }}</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($comments as $comment)
      <tr>
        <td class="align-middle">{{ $loop->iteration }}</td>
        <td class="align-middle">
          <img src="/img/comment/{{ $comment->photo }}" width="35px;" class="img-fluid rounded-circle">
        </td>
        <td class="align-middle">{{ $comment->nama }}</td>
        <td class="align-middle">{{ $comment->comment }}</td>
        <td class="align-middle">
          <form action="/destroyComment/{{ $comment->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="badge bg-danger text-decoration-none border-0" onclick="return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection