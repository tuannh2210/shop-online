@extends('layout')
@section('content')
<div class="container row justify-content-center">
	<div class="col-sm-4 col-sm-offset-4">
		<h3>Add Category</h3>
		<form action="{{getUrl('save-post-cate')}}" method="post"  id="form">
			<div class="form-group">
				<label>Category Name</label>
				<input 	type="text" name="cate_name"  class="form-control" placeholder="Category">
			</div>
			<div class="text-center">
				<a href="{{getUrl('user')}}" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</form>
	</div>
	
</div>
@endsection
