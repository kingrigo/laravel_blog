@extends('layouts.app')
@section('content')
@if(isset($error))
    <div class="alert">{{ $error }}</div>
@endif

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Created</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">1</th>
      <td>{{ $post->author}}</td>
      <td>{{ $post->name}}</td>
      <td>{{ $post->created_at}}</td>
      <td>{{ $post->aproved}}</td>
      <td>
          <a href="{{ route('post', $post->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
          <a href="{{ route('post.delete', $post->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
          <a href="{{ route('admin.aprove', $post->id)}}" class="btn btn-success">Aprobar</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection