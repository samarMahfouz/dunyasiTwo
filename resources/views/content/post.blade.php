@extends('layouts.app')
@section('content')
<div class="container">
  <div class="one-design">
    <h1 class="text-center">{{$post->name}}</h1>
    <div class="row">
      <div class="col-md-6">
        @if($post->url)
        <img src="../upload/{{$post->url}}">
        @endif
      </div>
      <div class="col-md-6">
        </p>{{$post->body}}</p>
      </div>
    </div>

  </div>
  <br><br><br>
  <h4>The Comments:</h4>
  @foreach($post->comments as $comment)
    <p class="leads">{{$comment->body}}</p>
  @endforeach
  <form class="comment" method="POST" action="/posts/{{$post->id}}/store" >
    <h3>write your comment</h3>
    {{csrf_field()}}
   <div class="form-group">
     <input type="text" name="body" class="form-control" placeholder="the title">
   </div>
     <button type="submit" class="btn btn-primary">Enter</button>
  </form>
  @foreach($errors->all as $error)
    {{$error}}
  @endforeach
</div>
@endsection
