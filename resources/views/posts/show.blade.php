@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{ $post->image }}" alt="">
    </div>
    <div class="col-">
      <h2> {{ $post->user->username }} </h2>
      <br>
      <p> {{ $post->caption }} </p>
    </div>
  </div>
</div>
@endsection
