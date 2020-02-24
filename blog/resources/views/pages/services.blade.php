
@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{$title}}</h1>

@if(count($services)>0)
   <ul>
	@foreach($services as $service)
	 <li class="list-group-item">{{$service}}</li>
    @endforeach
 
</ul>
@endif
<p>ths is the official site the internship management systemfo ethipan u iveristies</p>
<h1>thanks</h1>
</div>
@endsection



