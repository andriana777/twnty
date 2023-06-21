@extends('layouts.app')

@section('content')

    <div class="container">
        @includeIf('../partials/back-button')
<form action="{{route('task.update', $task->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="title">Title*</label>
        <input type="text" class="form-control" name="title"
         id="title" value="{{$task->title}}" placeholder="Title">

        @error('title')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description*</label>
        <textarea class="form-control" name="description" 
        id="description" placeholder="Description">{{$task->description}}</textarea>
        @error('description')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
    <select class="form-control" name="user_id" id="user_id">
  <!--Supplement an id here instead of using 'name'-->
  @foreach ($users as $user)
  <option value="{{$user['id']}}">{{$user['name']}}</option>
  @endforeach
</select>
        @error('user_id')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
    <select class="form-control" name="status_id" id="status_id">
  <!--Supplement an id here instead of using 'name'-->
  @foreach ($statuses as $status)
  <option value="{{$status['id']}}">{{$status['name']}}</option>
  @endforeach
</select>
        @error('status_id')
        <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
    <div class="btn-wrap">
        <button type="submit" class="btn btn-info">Save info</button>
    </div>

</form>
    </div>
@endsection