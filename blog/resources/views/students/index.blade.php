@extends('layouts.app')

@section('content')

<div class="container">
<h1>The admin page</h1>
@if(count($students)>0)
   @foreach($students as $student)
     <div class="alert alert-success">
     	<h3><a href="/students/{{$student->id}}"> {{$student->title}}</a></h3>
     	<small>written on {{$student->created_at}} by {{$student->user->name}}</small>
     </div>
     @endforeach
{{$students->links()}}
        
</div>
@else
<p>no data is registerd yet</p>
 @endif

@endsection
