@extends('layout')

@section('contex')

<div class="container">

    <div class="card">
        <div class="card-header" style="text-align: center">
          Content
        </div>
        <div class="card-body">

          @foreach ($data as $post)

          <h5 class="card-title">{{$post->name}}</h5>
          <p class="card-text">{{$post->description}}</p>

          @endforeach

          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>

</div>


@endsection

