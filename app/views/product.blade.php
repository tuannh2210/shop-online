@extends('layout')
@section('content')
<table class="table table-stripped table-bordered ">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>IMAGE</th>
			<th>DETAIL</th>
			<th>OWNER</th>
			<th class="text-center">
				<a href="{{getUrl('add-product')}}" class="btn btn-info glyphicon glyphicon-plus"></a>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($pros as $key => $value)
			<tr>
				<td>{{$value->id}}?></td>
				<td>{{$value->name}}</td>
				<td>{{$value->price}}</td>
				<td>{{$value->image}}</td>
				<td>{{$value->detail}}</td>
				<!-- <td>{{$value->owner()->name}}</td> -->
				<td class="text-center">
					<a class="btn btn-info glyphicon glyphicon-edit" href='{{getUrl("update-product?id=$value->id")}}' ></a>
					<a class="btn btn-danger glyphicon-trash glyphicon" href='{{ getUrl("remove-product?id=$value->id")}}' ></a>
					<a class="btn btn-danger " href='{{ getUrl("add-to-card?id=$value->id") }}' >Add To Card</a>
				</td>
			</tr>
		@endforeach
		
	</tbody>
</table>
@endsection

