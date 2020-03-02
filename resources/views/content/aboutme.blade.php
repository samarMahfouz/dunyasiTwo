@extends('layouts.app')
@section('content')
<!-- Start about me  -->
<section class="about s-about" id="about">
  <div class="container">
    <section class="con">
      <h2>about me</h2>
      <section class="img"><img src="upload/myim.jpg" alt=""/></section>
      <section class="info">
        <section >
        </section>
       <h3>{{$user->name}}</h3>
       <p>web developer</p>
      </section>
    </section>
      <hr>
  </div>
</section>
<!-- End about me  -->
@endsection
