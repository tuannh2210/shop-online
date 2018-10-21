@extends('client-layout')
@section('content')
	<div class="content">
		<div class="container">
			<ol class="breadcrumb">
				 <li><a href="{{getUrl('/')}}">Home</a></li>
				 <li class="active">Fashion</li>
			</ol>
			<div class="cart-div" >
				<p class="title-cart"></p>
				@foreach ($products as $key => $value)
						<a href="#" id="info-pro">
	            			<div class="product-item">
	                            <div class="img-item">
		                                @if($value->feature_image)
	                            		 <img src="app/views/product/uploads/{{$value->feature_image}}">
		                                @endif
	                            </div>
	                            <div class="info-item">
	                                <p class="pro-name">{{$value->name}}</p>
	                                <p class="price">$ {{$value->price}}.00</p>
	                            </div>
	                            <div class="btn-control">
	                                <button class="hover "><i class="fa fa-exchange"></i></span>
	                                </button>
	                                <a href='{{ getUrl("add-to-card?id=$value->id") }}'><button type="" >ADD TO CART </button>
	                                </a>	

	                                {{-- <a class="btn btn-danger " href='{{ getUrl("add-to-card?id=$value->id") }}' >Add To Card</a> --}}
	                                <button class="hover"><i class="fa fa-heart-o"></i></button>
	                            </div>
	                        </div>
	                    </a>    
                   @endforeach
			</div>
		</div>
	</div>
@endsection			