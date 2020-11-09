@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4 pt-5 ml-5">
        <img src="https://cdn.jpegmini.com/user/images/slider_puffin_jpegmini_mobile.jpg"alt="profile" style="border-radius: 50%; width:10rem">
    </div>
    <div class="col-6 pt-5">
      <div class="d-flex">
        <div>
        <h1>{{ Auth::user()->name }}</h1>
        </div>
        <div class="ml-2">
        <a href="#" class="btn btn-primary">Follow</a>
        </div>
      </div>
        <div class="d-flex">
          <div class="pr-5"><strong>120</strong> posts</div>
          <div class="pr-5"><strong>23K</strong> followers</div>
          <div class="pr-5"><strong>236</strong> following</div>
        </div>
        <div class="mt-2">www.papuginas.net</div>
        <div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, consequuntur.
          </p>
          <strong>www.papuguverslas.lt</strong>
        </div>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col-4">
      <img src="https://images.newscientist.com/wp-content/uploads/2018/08/22154401/fk9y391.jpg" alt="" id="image">
    </div>
    <div class="col-4">
      <img src="https://i.guim.co.uk/img/media/d943ba63a6a8b44f8669ef6b73ccbb229972d95d/0_130_5000_3002/master/5000.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=601a840f510531096da3521b7f010a2a" alt="" id="image">
    </div>
    <div class="col-4">
      <img src="https://i.pinimg.com/originals/c5/09/8d/c5098db95145a511be488ca4553d3fd2.jpg" alt="" id="image">
    </div>
  </div>
</div>
@endsection
