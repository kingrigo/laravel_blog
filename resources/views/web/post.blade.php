@extends('layouts.app')
@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="col-md-8 offset-md-2">
    <a href="{{ route('blog')}}" class="btn btn-light mb-2"> <- Volver a blogs</a>
        <div class="card animated bounceInRight">
            <div class="card-header">
                <img src="{{ $post->img}}" alt="Imagen del post" class="card-img-top img-responsive">
            </div>
            <div class="card-body">
                <h2>{{ $post->name }}</h2>
                <p>{{ $post->body}}</p>
            </div>
        </div>
    </div>
</div>
@endsection