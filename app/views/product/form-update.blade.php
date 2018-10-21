@php
// session_start();
@endphp
@extends('layout')
@section('title', 'Category management')
@section('content')
<div class="container  ">
	<form action="{{getUrl('save-update-product')}}" method="post" enctype="multipart/form-data" id="form" class="row" >
		<div  class="col-sm-6 col-sm-offset-3">
			<h3>Update Product</h3>
			<input type="hidden" name="id" value="{{ $model->id }}">
			<div class="form-group">	
				<label>Categry</label>
				<select name="cate_id" class="form-control">
					@foreach ($cates as $c)
						<option 
							@if ($c->id == $model->cate_id)
								selected 
							@endif
								value="{{$c->id}}">{{ $c->cate_name}}
						</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Product Name</label>
				<input 	type="text" name="name" value="{{$model->name}}"  class="form-control" placeholder="Product Name"  >
			</div>
			<div class="form-group">	
				<label>Product Price</label>
				<input 	type="number" name="price" value="{{$model->price}}"  class="form-control" placeholder="Product Price" >
			</div>
			<div class="form-group">	
				<label>Images</label>
				<input 	type="file" name="feature_image" value="{{$model->feature_image}}"  class="form-control" placeholder="Product Price"  >
				 <img id="blah" src="app/views/product/uploads/{{$model->feature_image}}"  width=200px >
			</div>

			<div class="form-group">	
				<label>Product detail</label>
				<textarea name="detail" class="form-control" >{{$model->detail}}</textarea>
			</div>
			<div class="form-group">	
				<label>Owner</label>
				<select name="created_by" class="form-control">
						@foreach ($users as $u)
						<option 
							@if ($u->id == $model->created_by)
								selected 
							@endif
								value="{{$u->id }}">
								{{$u->name}}
						</option>
					@endforeach
				</select>
			</div>
			<div class="text-center">
				<a href="{{getUrl('product') }}" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</div>

		{{-- <div  class="col-sm-4 add-image col-sm-offset-2">
			<h3>Gallery</h3>
			<div class="add">
				<div class="gallery">
					<div class="form-group">	
						<input 	type="file" name="url" value="" class="form-control" placeholder=" Price"  >
					</div>
					<div class="form-group">	
						<input 	name="" value="Notes" class="form-control" placeholder="Note">
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-info " id="addnew">Add new</button>
		</div> --}}
@endsection