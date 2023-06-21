@extends('layouts.app')

@section('content')
    <div class="container">
<form action="{{route('user.save')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name">

        @error('name')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">

        @error('email')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password*</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">

        @error('password')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
    <select class="form-control" name="role_id" id="role">
 
  @foreach ($roles as $role)
  <option class="form-control" value="{{$role->id}}">{{$role->name}}</option>
  @endforeach
</select>
        @error('role')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="btn-wrap">
        <button type="submit" class="btn btn-info">Save info</button>
    </div>

</form>
    </div>
@endsection