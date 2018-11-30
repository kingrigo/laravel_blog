@extends('layouts.app')
@section('content')
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto mt-5">
                <h1 class="mb-5">Un blog <i>distinto</i></h1>
            </div>
            <div class="col-xl-12 mx-auto order-now my-padding">
                <a href="{{ route('blog')}}" class="btn btn-light btn-lg">Comenzar!</a>
            </div>
        </div>
    </div>
</header>


@endsection