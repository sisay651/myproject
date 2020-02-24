@extends('layouts.app')

@section('content')

<div class="container">
<h1>create students list here</h1>
<form method="post" action="/students" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="form-group row">
	<lable for = "titleid" class = "col-sm-1 col-form-label">title</lable>
	<div class="col-sm-9">
		<input type="text" name="title" class="form-control" id="titleid" placeholder="student title">
</div></div>
<div class="form-group row">
	<lable for = "bodyid" class = "col-sm-1 col-form-label">body</lable>
	    <div class="col-sm-9">
		<textarea class="form-control" id="bodyid" name="body" placeholder="the body of the textarea"></textarea>   
   </div>
</div>
<div class="form-group row">
	<div class="offset-sm-1 col-sm-9">
		<button type="submit" class="btn btn-primary">submit</button>
	</div>
	</div>
</form>
@endsection   
