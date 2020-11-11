@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4 pt-5 ml-5">
        <img src="https://cdn.jpegmini.com/user/images/slider_puffin_jpegmini_mobile.jpg"alt="profile" style="border-radius: 50%; width:10rem">
    </div>
    <div class="col-6 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <div>
        <h1>{{ $user->username }}</h1>
        <a href="#" class="btn btn-primary">Follow</a>
        </div>
        <a href="/p/create">Add new post</a>
        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
      </div>
        <div class="d-flex">
          <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
          <div class="pr-5"><strong>23K</strong> followers</div>
          <div class="pr-5"><strong>236</strong> following</div>
        </div>
        <div class="mt-2">{{ $user->profile->title ?? 'N/A'}}</div>
        <div>
            {{ $user->profile->description ?? 'N/A'}}
        </div>
        <div>
          <strong><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></strong>
        </div>
    </div>
  </div>
  
  <div class="row pt-5">
    @foreach($user->posts as $post)
      <div class="col-4 pb-4">
        <a href="/p/{{$post->id}}">
          <img src="/storage/{{$post->image}}" alt="" id="image" class="w-100">
        </a>
      </div>
    @endforeach
  </div>
</div>

@endsection
