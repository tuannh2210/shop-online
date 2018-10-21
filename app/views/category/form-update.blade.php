@extends('layout')
@section('content')
<div class="container row justify-content-center">
	<div class="col-sm-4 col-sm-offset-4">
		<h3>Add Category</h3>
		<form action="{{getUrl('save-update-cate')}}" method="post"  id="form">
			<input type="hidden" name="id" value="{{$model->id}}"  >
			<div class="form-group">
				<label>Category Name</label>
				<input 	type="text" name="cate_name"  class="form-control" value="{{$model->cate_name}} " placeholder="Category">
			</div>
			<div class="text-center">
				<a href="{{getUrl('user')}}" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</form>
	</div>
	
</div>
@endsection
