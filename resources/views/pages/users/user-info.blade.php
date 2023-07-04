@extends('layouts.app')

@section('content')

<div class="container">

<div>
<h3>{{$user->name}}</h3>
</div>
@if(!empty($user->role->name))
<div>
    <h4>Role:</h4>
<p>{{$user->role->name}}</p>
</div>
    @endif
    @if(!empty($user->email))
<div>
    <p>Email:</p>
    <p>{{$user->email}}</p>
</div>
    @endif
<div>
    <p>Created:</p>
    <p><span>{{$user->created_at ?? ''}}</p>
</div>








</div>


@endsection
