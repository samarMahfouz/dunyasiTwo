@extends('layouts.app')
@section('content')
<div class="posts">
  <div class="container">
   <h1 class="text-center">  welcome {{Auth::user()->name}} </h1>
  <table class="table">
    <tr>
      <th>#</th>
      <th>name</th>
      <th>email</th>
      <th>role</th>
    </tr>
    @foreach($users as $user)
    <tr>
      <th>{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
        @if(Auth::user()->role == 2 || $user->id == 1)
        @else
        <div class="form-group" >
          <form method="POST" action="/updaterole/{{$user->id}}">
            {{csrf_field()}}
            <select class="form-control" name="role" onchange="this.form.submit()">
              <option value="1" {{($user->role == 1) ? 'selected' : null}}> admin </option>
              <option value="2" {{($user->role == 2) ? 'selected' : null}}> editor </option>
              <option value="3" {{($user->role == 3) ? 'selected' : null}}> user </option>
            </select>
          </form>
        </div>
        @endif
      </td>
    </form>
    </tr>
    @endforeach
  </table>
  </div>
</div>
@endsection
