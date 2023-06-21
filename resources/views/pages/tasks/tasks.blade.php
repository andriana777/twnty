@extends('layouts.app')

@section('content')
@if(!empty($tasks))

 
<div class="container">
<div class="task-wrapper">
<h1>All TASKS</h1>
<form class="d-flex flex-row" action="{{route('task.index')}}" method="GET">
<div class="form-group">
<select class="form-control col-6" name="status_id" id="status_id">
@foreach ($statuses as $status)
<option value="{{$status['id']}}">{{$status['name']}}</option>
@endforeach
</select>
</div>

<div class="form-group">
<select class="form-control" name="user_id" id="user_id">

 @foreach ($users as $user)
 <option class="form-control" value="{{$user['id']}}">{{$user['name']}}</option>
 @endforeach
</select>
</div>
<div class="btn-wrap">
        <button type="submit" class="btn btn-info">Filter results</button>
        <a class="btn btn-default active" href="{{route('task.index')}}">Clear Filters</a>
    </div>
</form>

<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task Title</th>
      <th scope="col">Status</th>
      <th scope="col">User</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tasks as $task)
    <tr>
      <th scope="row">{{$task->id}}</th>
      <td>{{$task->title}}</td>
      <td>{{$task->status}}</td>
      <td>{{$task->username}}</td>
      <td>{{$task->created_at}}</td>
      <td>{{$task->updated_at}}</td>
      <th scope="col"> <a href="{{route('task.show', $task->id)}}" class="btn btn-warning">Details</a></th>
      <th scope="col"> <a href="{{route('task.edit', $task->id)}}" class="btn btn-success">Edit</a></th>
      <th scope="col"> <a href="{{route('task.destroy', $task->id)}}" class="btn btn-danger">Delete</a></th>
    </tr>
    @endforeach
  </tbody>
  <tfooter>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task Title</th>
      <th scope="col">Status</th>
      <th scope="col">User</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th colspan="2">Actions</th>
    </tr>
  </tfooter>
</table>

</div>
</div>
 
   @else
   <h2>No tasks to render...</h2>

@endif

@endsection