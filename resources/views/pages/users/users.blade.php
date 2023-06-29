@extends('layouts.app')

@section('content')

@if(!empty($users))
<div class="container">
<h1>USERS</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Created</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user['created_at']}}</td>
      <th scope="col"><a href="{{route('user.show', $user->id)}}" class="btn btn-warning">Details</a></th>
      <th scope="col"><a href="{{route('user.edit', $user->id)}}" class="btn btn-success">Edit</a></th>
      <th scope="col"><a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger">Delete</a></th>
    </tr>
@endforeach
  </tbody>
  <tfooter>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Created</th>
      <th colspan="2">Actions</th>
    </tr>
  </tfooter>
</table>
@else
<h1>No registered users...</h1>
@endif

</div>


@endsection
