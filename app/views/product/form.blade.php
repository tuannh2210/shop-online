@extends('layout')
@section('content')
<div class="container  ">
	<form action="{{getUrl('post-save-product')}}" method="post" enctype="multipart/form-data" id="form" class="row" >

		<div  class="col-sm-6 col-sm-offset-3">
			<h3>Add Product</h3>
			<div class="form-group">	
				<label>Categry</label>
				<select name="cate_id" class="form-control">
					@foreach ($cate as $c)
						<option	value="{{$c->id}}">{{ $c->cate_name}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Product Name</label>
				<input 	type="text" name="name" class="form-control" placeholder="Product Name"  >
			</div>
			<div class="form-group">	
				<label>Product Price</label>
				<input 	type="number" name="price" value="1" class="form-control" placeholder="Product Price"  >
			</div>
			<div class="form-group">	
				<label>Images</label>
				<input 	type="file" name="feature_image" value="" class="form-control" placeholder="Product Price"  >
				 <img id="blah" src="#" width=200px >
			</div>

			<div class="form-group">	
				<label>Product detail</label>
				<textarea name="detail" class="form-control" value="feuhuheuhfueh" placeholder="dfhudh"></textarea>
			</div>
			<div class="form-group">	
				<label>Owner</label>
				<select name="created_by" class="form-control">
					@foreach ($users as $u)
						<option	value="{{$u->id}}"> {{ $u->name}} </option>
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
			<button type="button" class="btn btn-info" id="addnew">Add new</button>
		</div> --}}
@endsection
			<!-- <div  class="col-sm-6 ">
				<h4>Product images</h4>
				<ol>
					<input type='file'></input><br>
				</ol>
				<button id="btn2" >Add Images</button>
			</div>
		</form>
	</div>
</div>
	<script>
	$(document).ready(function(){
	    $("#btn2").click(function(){
	        $("ol").append("<input type='file'> </input><br>");
	    });
	});
	</script> -->
