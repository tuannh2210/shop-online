@extends('layout')
@section('conten-header')
	 <h1>
        Products category 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product</a></li>
      </ol>
@endsection
@section('content')
<table class="table table-stripped table-bordered ">
	<thead>
		<tr>
			<th>#</th>
			<th>Category</th>
			<th>NAME</th>
			<th>IMAGE</th>
			<th>PRICE</th>
			<th width="300px">DETAIL</th>
			<th >OWNER</th>
			<th class="text-center">
				<a href="{{getUrl('add-product')}}" >Add new</a>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($products as $value)
			<tr>
				<td>{{$value->id}}</td>
				<td>
					<a href="{{getUrl('cate-pro')}}?id={{$value->cate()->id}}">{{$value->cate()->cate_name}}</a>
				</td>
				<td>{{$value->name}}</td>
				<td>
					<img src="app/views/product/uploads/{{$value->feature_image}}" width="100px">
				</td>
				<td>{{$value->price}}</td>
				<td>{{$value->detail}}</td>
				<td>
					<a href="{{getUrl('user-pro')}}?id={{$value->owner()->id}}">{{$value->owner()->name}}</a>
				</td>
				<td class="text-center">
					<a class="btn btn-info glyphicon glyphicon-edit" href='{{getUrl("update-product?id=$value->id")}}' ></a>
					<a class="btn btn-danger glyphicon-trash glyphicon" href='{{ getUrl("remove-product?id=$value->id")}}' ></a>
				</td>
			</tr>
		@endforeach

		
	</tbody>
</table>
@endsection

