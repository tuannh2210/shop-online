@extends('layout')
@section('content')
<h3>List Product</h3>
<table id="example1" class="table table-stripped table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Category</th>
			<th>Name</th>
			<th>Images</th>
			<th>Price</th>
			<th width="300">Details</th>
			<th>Onwer</th>

			<th class="text-center">
				<a href="{{getUrl('add-product')}}" class="">
					Add new
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($pros as $p)
			<tr>
				<td>{{$p->id}}</td>
				{{-- <td> {{$value->cate()->cate_name}}</td> --}}
				<td>
					<a href="{{getUrl('cate-pro')}}?id={{$p->cate()->id}}">{{$p->cate()->cate_name}}</a>
				</td>
				<td>{{$p->name}}</td>
				<td>
					<img src="app/views/product/uploads/{{$p->feature_image}}" width="100px">
				</a>
				</td>
				<td>{{$p->price}}</td>
				<td>{{$p->detail}}</td>
				<td>
					<a href="{{getUrl('user-pro')}}?id={{$p->owner()->id}}">{{$p->owner()->name}}</a>
				</td>
				<td class="text-center">
					<a class="btn btn-info " href='{{getUrl("update-product?id=$p->id")}}' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='{{ getUrl("remove-product?id=$p->id")}}' ><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		@endforeach
		
	</tbody>
</table>

@endsection

