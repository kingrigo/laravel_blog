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
               <span>
                 <a href="{{ route('post.edit',$post->id) }}" class="btn">Editar</a>
                 <a href="{{ route('post.delete', $post->id)}}" class="btn">Borrar</a>
               </span>
             @endif
               <img src="{{ $post->img }}" class="card-img-top img-responsive" />
             <div class="card-body">
               <h3 class="card-title">{{ $post->name}}</h3>
               <p class="card-text"> {{ $post->brief }} </p>
               <a href="{{route('post',$post->id)}}" class="btn btn-dark float-right">Leer!</a>
             </div>
            </div>
           </div>
        @endif
        @endforeach
        </div>
        {{ $posts->render()}}
    @else
        <h2>No hay articulos para mostrar</h2>  
    @endif

</div>
@endsection