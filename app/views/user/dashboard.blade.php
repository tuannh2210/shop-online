@php
// session_start();
@endphp
@extends('layout')
@section('content')
		@foreach ($users as $value)
		@endforeach
		<div class="text-center">
				 <h1>Hello Mr.{{$value->name}}</h1>
			 <img src="app/views/user/uploads/{{$value->avatar}}" class="img-circle img-thumbnail" style="margin-top: 50px">
		</div>
@endsection
