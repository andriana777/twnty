@extends('layouts.app')

@section('content')

<div class="container">

<div>
<p>{{$task->title}}</p>
</div>
<div>
<p>{{$task->description}}</p>
</div>
<div>
    <p>Username:</p>
<p>{{$task->user->name}}</p>
</div>
<div>
    <p>Status:</p>
    <p>{{$task->status->name}}</p>
</div>
<div>
    <p>Created:</p>
    <p><span>{{$task->created_at}}</p>
</div>
<div>
    <p>Updated:</p>
    <p>{{$task->updated_at}}</p>
</div>







</div>


@endsection
