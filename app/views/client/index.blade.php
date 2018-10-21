@extends('client-layout')
@section('banner')
	<div class="banner__auto">
        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
             <!--  <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol> -->

            <!-- imgaes for slides -->
              <div class="carousel-inner">
                  <div class="item active">
                    <img src="public/img/bg1.png" alt="Los Angeles" ">
                  </div>

                  <div class="item">
                    <img src="public/img/bg4.png" alt="Chicago" ">
                  </div>
              
                  <div class="item">
                    <img src="public/img/bg3.png" alt="New york" ">
                  </div>
              </div>

            <!-- Controls next pre -->

              <a class="left carousel-control" href="#myCarousel" data-slide="prev"  >
                  <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
        </div>
	</div> 
@endsection
@section('content')	
	<div class="container">
	    <div class="service">
	        <div class="service-item">
	            <div class="img">
	                <img src="{{getUrl('public/img/sv1.png')}}" alt="">
	            </div>
	            <div class="info">
	                <p class="title">24/7 SUPPORT</p>
	                <span> Online consultations</span>
	            </div>
	        </div>
	        <div class="service-item">
	            <div class="img">
	                <img src="public/img/sv2.png" alt="">
	            </div>
	            <div class="info">
	                <p class="title">30-day return</p>
	                <span>Moneyback guarantee</span>
	            </div>
	        </div>
	        <div class="service-item">
	            <div class="img">
	                <img src="public/img/sv3.png" alt="">
	            </div>
	            <div class="info">
	                <p class="title">Free Shipping</p>
	                <span>On order over $200</span>
	            </div>
	        </div>
	        <div class="service-item">
	            <div class="img">
	                <img src="public/img/sv4.png" alt="">
	            </div>
	            <div class="info">
	                <p class="title">Safe Shopping</p>
	                <span>Safe Shopping Guarantee</span>
	            </div>
	        </div>
	    </div>
	    <div class="main-content">
	        <div class="nav-tabs">
	            <a href="#"><span>BEST SELLERS</span></a>
	            <a href="#"><span>ON SALE</span></a>
	            <a href="#"><span>NEW PRODUCT</span></a>
	        </div>
	        <div class="product-div">
                <section>
					@foreach ($pro as $key => $value)
						<a href="#" id="info-pro">
	            			<div class="product-item">
	                            <div class="img-item">
		                                @if($value->feature_image)
	                            		 <img src="app/views/product/uploads/{{$value->feature_image}}">
		                                @endif
	                            </div>
	                            <div class="info-item">
	                                <p class="pro-name">{{$value->name}}</p>
	                                {{-- <p class="pro-name"><a href="{{getUrl('cates-pro')}}?id={{$value->cate()->id}}">{{$value->cate()->cate_name}}</a></p> --}}
	                                <p class="price">${{$value->price}}.00</p>
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
                </section>
	        </div>
	    </div>
	</div>
@endsection