@extends('layout')
@section('content')
<H3>List Category</H3>
<table class="table table-stripped table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Category</th>
			{{-- <th>Parent Name</th> --}}

			<th class="text-center">
				<a href="{{getUrl('add-cate')}}" class="">
					Add new
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($cates as $p)
			<tr>
				<td>{{$p->id}}</td>
				{{-- <td> {{$value->cate()->cate_name}}</td> --}}
				<td>{{$p->cate_name}}</td>
				{{-- <td>{{$p->getParentName()}}</td> --}}
				<td class="text-center">
					<a class="btn btn-info " href='{{getUrl("update-cate?id=$p->id")}}' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='{{ getUrl("remove-cate?id=$p->id")}}' ><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		@endforeach
		
	</tbody>
</table>
@endsection

