@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    Editar post
                </div>
                <div class="card-body">
                    {!! Form::model($post,['route'=>['post.update',$post->id],'method' => 'PUT', 'files' => true]) !!}

                        @include('crud.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection