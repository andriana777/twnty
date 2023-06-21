@extends('layouts.app')

@section('content')

<div class="container">

<div>
<h3>{{$user->name}}</h3>
</div>

<div>
    <h4>Role:</h4>
<p>{{$user->role}}</p>
</div>
<div>
    <p>Email:</p>
    <p>{{$user->email}}</p>
</div>
<div>
    <p>Created:</p>
    <p><span>{{$user->created_at}}</p>
</div>








</div>


@endsection