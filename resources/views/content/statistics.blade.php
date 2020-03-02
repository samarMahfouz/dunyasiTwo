@extends('layouts.app')
@section('content')
<h1 class="text-center">statistics page</h1>
<section class="statistics">
  <table class="table table-hover">
    <tr>
      <td>all users</td>
      <td>{{$users}}</td>
    </tr>
    <tr>
      <td>all posts</td>
      <td>{{$posts}}</td>
    </tr>
    <tr>
      <td>all comments</td>
      <td>{{$comments}}</td>
    </tr>
    <tr>
      <td>all categories</td>
      <td>{{$cats}}</td>
    </tr>
  </table>
</section>

@endsection
