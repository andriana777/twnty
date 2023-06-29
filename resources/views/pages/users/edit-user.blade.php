@extends('layouts.app')

@section('content')
    <div class="container">

<form action="{{route('user.update', $user->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" class="form-control" name="name"
        id="name" value="{{$user->name}}" placeholder="Name">

        @error('name')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control" name="email"
        id="email" value="{{$user->email}}" placeholder="Email">

        @error('email')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password*</label>
        <input type="password" class="form-control" name="password"
        id="password" value="{{$user->password}}"placeholder="Password">

        @error('password')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
    <select class="form-control" name="role_id" id="role">
  <!--Supplement an id here instead of using 'name'-->
  @foreach ($roles as $role)
  <option value="{{$role->id}}">{{$role->name}}</option>
  @endforeach
</select>
        @error('role')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="btn-wrap">
        <button type="submit" class="btn submit">Save info</button>
    </div>

</form>
    </div>
@endsection
