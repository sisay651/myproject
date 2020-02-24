@extends('layouts.app')

@section('content')
   
    @if($user->admin)
    @php

        header("Lo  cation: " . URL::to('/students'), true, 302);
        exit();

    @endphp
@else 
<h1><a href="/Admin/admin">admin </a></h1>
@endif

@endsection