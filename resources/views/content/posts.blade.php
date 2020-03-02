@extends('layouts.app')
@section('content')
<!-- Start header -->
<header>
  <div class="overlay">
    <div class="container">
      <section>
        <h1 class="">welcome to my website</h1>
        <p>crafts, miniature and more</p>
      </section>
    </div>
  </div>
</header>
<!-- End header -->
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
            <a href="/posts/{{$post->id}}"><h4>{{$post->name}} </h4>
            @if($post->url)
            <img src="upload/{{$post->url}}">
            @endif
          </a>
          </div>
        </div>
            @endforeach
      </div>
    </section>

<!-- End my designs -->

  </div>
</section>
@endsection
