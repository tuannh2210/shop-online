@extends('layout')
@section('conten-header')
	 <h1>
        All user<small>List user</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboardt</li>
      </ol>
@endsection
@section('content')
<h3>List User</h3>
<table class="table table-stripped table-bordered table-hover ">
	<thead>
		<tr >
			<th>#</th>
			<th>NAME</th>
			<th>AVATAR</th>
			<th>EMAIL</th>
			<th>Tolal Product</th>
			<th class="text-center">
				{{-- <a href="{{getUrl('add-user')}}" >Add new</a> --}}
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $value)
			<tr>
				<td>{{$value->id}}</td>
				<td>{{$value->name}}</td>
				<td>
					<img src="app/views/user/uploads/{{$value->avatar}}" width="100px" class="img-circle">
				</td>
				<td>{{$value->email}}</td>
				<td>{{$value->getConutProduct()}}</td>
				<td class="text-center">
					<a class="btn btn-info" href='{{getUrl("update-user?id=$value->id") }}' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='{{getUrl("remove-user?id=$value->id")}}' >
						<i class="fa fa-trash" aria-hidden="true"></i>
					</a>

				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection