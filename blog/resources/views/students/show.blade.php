@extends('layouts.app')

@section('content')

<div class="container">

	<h4>{{$students->title}}</h4>
	<small>written on {{$students->created_at}}</small>
<div>
	{{$students->body}}
</div>

	<small>written on {{$students->created_at}}by {{$students->user->name}}</small>
	<hr>
	<a href="/students" class="btn btn-success">Go Back</a>
@if(!Auth::guest())
@if(Auth::user()->id==$students->user_id)
	<a href="/students/{{$students->id}}/edit" class="btn btn-info">Edit</a>
	<div align="right">
	<a href="/students" class="btn btn-success">Go Back</a>
</div>
@endif
@endif

@endsection
