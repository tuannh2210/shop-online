@extends('layout')
@section('content')
<div class="container row justify-content-center">
	<div class="col-sm-4 col-sm-offset-4">
		<h3>Update User</h3>
		<form action="{{getUrl('save-update-user')}}" method="post" enctype="multipart/form-data" id="form">
			<input type="hidden" name="id" value="{{$model->id}}"  >
			<div class="form-group">
				<label>User Name</label>
				<input 	type="text" name="name"  class="form-control"  value="{{$model->name}}" >
			</div>
			<div class="form-group">	
				<label>Email</label>
				<input name="email"  class="form-control"  value="{{$model->email}}"  >
			</div>
			<div class="form-group">	
				<label>Avatar </label>
				<input 	type="file" name="avatar"  class="form-control" placeholder="Avatar	">
				 <img id="blah" src="app/views/user/uploads/{{$model->avatar}}"  width=200px >
			</div>
			<div class="text-center">
				<a href="{{getUrl('user')}}" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</form>
	</div>
	{{-- @foreach ($users as $key => $value)
			
	@endforeach --}}
	
</div>
@endsection
