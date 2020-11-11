@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{ $post->image }}" alt="">
    </div>
    <div class="col-4">
      <div>
        <div class="d-flex align-items-center">
          <div class="pr-3">
            <img src="/storage/{{ $post->user->profile->image }}" alt=""class="rounded-circle w-100" style="max-width:5rem;">
          </div>
          <div>
            <div class="font-weight-bold">          
              <a href="/profile/{{ $post->user->id }}">
                {{ $post->user->username }}
              </a>
              <a href="#" class="pl-2">Follow</a>
            </div>
          </div>
        </div>
        <hr>
        <p>
          <span class="font-weight-bold">
            <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
          </span>
          {{ $post->caption }}
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
