@extends('layouts.app')

@section('content')

    <div class="container">
<form action="{{route('task.save')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title*</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">

        @error('title')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description*</label>
        <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
        @error('description')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
    <select class="form-control" name="user_id" id="user_id">
 
  @foreach ($users as $user)
  <option class="form-control" value="{{$user['id']}}">{{$user['name']}}</option>
  @endforeach
</select>
        @error('user_id')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
    <select class="form-control" name="status_id" id="status_id">

  @foreach ($statuses as $status)
  <option value="{{$status['id']}}">{{$status['name']}}</option>
  @endforeach
</select>
        @error('status_id')
        <p class="bg-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="btn-wrap">
        <button type="submit" class="btn btn-info">Save info</button>
    </div>

</form>
    </div>
@endsection