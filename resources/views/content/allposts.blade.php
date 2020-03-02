@extends('layouts.app')
@section('content')
<!-- Start my designs -->
<section class="my-design" id="design">
  <div class="container">
    <h2>my designs</h2>
    <ul class="link">
      <li class="selected filter" data-filter="all">all</li>
      @foreach($cat_name as $result)
      <li  class="filter" data-filter=".{{ $result->name }}">{{ $result->name }}</li>
      @endforeach
    </ul>
    <section id="gallery" class="gallery">
      <div class="row">
        @foreach($posts as $post)
        <div class="col-md-3 plus">
          <div class="mix {{$post->category->name}}">
            <a href="/posts/{{$post->id}}"><h4>{{$post->name}}</h4>
            @if($post->url)
            <img src="upload/{{$post->url}}">
            @endif
            </a>
            <a href="/allPosts/{{$post->id}}/delete">delete    </a>
          </div>
        </div>
            @endforeach
      </div>
    </section>
    @if(Auth::user()->role == 1)
    <div class="register reg-posts">
      <h3>Add new post</h3>
      <form  class="signup"  method="POST" action="/posts/store" enctype="multipart/form-data">
        {{csrf_field()}}
       <div class="form-group">
         <input type="text" name="name" class="form-control" placeholder="the page name">
       </div>
       <div class="form-group">
         <input type="text" name="body" class="form-control" placeholder="the title">
       </div>
       <div class="form-group">
         <input type="file" name="url" class="form-control">
       </div>
       <div class="form-group">
         <select class="form-control" name="cat_id">
         @foreach($cat_name as $cat)
            <option value="{{$cat->id}}" > {{$cat->name}} </option>
         @endforeach
       </select>
       </div>
         <button type="submit" class="btn btn-info">Enter</button>
      </form>
      @foreach($errors->all as $error)
        {{$error}}
      @endforeach
    </div>
    @endif
  </div>
</section>
<!-- End my designs -->
@endsection
