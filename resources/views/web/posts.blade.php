@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5">
    @if(count($posts)>0)
        <h2 class="title animated bounce">Listado de posts</h2>
        <div class="card-group row">
          @foreach($posts as $post)
          @if($post->aproved)
          <div class="col-md-4 col-sm-4 col-xs-12 mt-2 ">
            <div class="card animated bounceIn">
             @if ((Auth::check() && Auth::user()->name == $post->author) || (Auth::check() && Auth::user()->type == 'admin' ))
               <span class="post-action">
                 <a href="{{ route('post.delete', $post->id)}}" class="btn btn-borrar"><i class="fas fa-trash-alt"></i></a>
                 <a href="{{ route('post.edit',$post->id) }}" class="btn btn-editar"><i class="fas fa-pencil-alt"></i></a>
              </span>
             @endif
               <img src="{{ $post->img }}" class="card-img-top img-responsive" />
             <div class="card-body">
               <h3 class="card-title">{{ $post->name}}</h3>
               <p class="card-text"> {{ $post->brief }} </p>
               <a href="{{route('post',$post->id)}}" class="btn btn-primary float-right"><i class="fas fa-eye"></i></a>
             </div>
            </div>
           </div>
        @endif
        @endforeach
        </div>
        {{ $posts->render()}}
    @else
        <div class="alert alert-warning">No hay articulos para mostrar</div>  
    @endif

</div>
@endsection