<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{getUrl('public/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{getUrl('public/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{getUrl('public/css/main.css')}}">
    <link rel="stylesheet" href="{{getUrl('public/css/client.css')}}">
</head>
<body>
	<header id="header" class="">
		<div class="top_header">
			<div class="container">
				
				<ul class="nav left">
					<li>
						<a href="#">
							<i class="fa fa-phone" ></i> +00 123 456 789
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-envelope"></i> Contact us today !
						</a>
					</li>
				</ul>
				<ul  class="nav right">
					<li><a href="#"> Support</a></li>
					<li><a href="#">Services</a></li>

					<li><a href="{{getUrl('login')}}">
							@php
								if(!isset($_SESSION['AUTH'])){
									echo 'Login/Register';
								}
								else {
									echo 'Dashboard';
								}
							@endphp
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end Top header -->

		<div class="mid_header">
			<div class="container">
				<div class="logo_div col-sm-3">
					<a href=" {{getUrl('/')}} ">
						<img src="public/img/logo.png" alt="">
					</a>
				</div>
				<div class="cart_div">
					<a href=" {{getUrl('cart')}} " class="cart-link">
						{{-- <span class="title">Shoping cart</span><br> --}}
						{{-- <span class="total-item">0 items</span> --}}
						{{-- <span>-</span>
						<span class="total-price">
							<span class="total-price-symbol">$</span>
							{{$_SESSION['TOTAL']}} 
						</span> --}}
						<span class="notify notify-count"> {{ getTotalCartItem()}}</span>
					</a>
				</div>
				<div class="form_search">
					<form class="form-inline" action="" method="post" accept-charset="utf-8">
						<select name="cate_name">
							@foreach ($cates as $key => $value)
								<option value="">{{$value->cate_name}}</option>
							@endforeach
						</select>
						<input type="text" class="form-group" placeholder="I'm shopping for...">
						<input type="submit" class="form-group " value="">
						<input type="hidden" name="p" value="p">
					</form>
				</div>
			</div>
		</div>
		<!-- End  mid_header-->

		<div class="main_header">
			<div class="container">
				<div class="main_menu col-xs-12 col-sm-12">
					<nav >
						<ul class="menu">
							<li class="cate_div"><a href="#" title="">CATEGOIES</a>
								<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
								<div class="sub-menu">
									<ul >
										{{-- @foreach ($pro as $key => $value)
											<li class="cate-name">
												<a href="{{getUrl('cates-pro')}}?id={{$value->cate()->id}}">{{$value->cate()->cate_name}}</a>
											</li>
										@endforeach --}}
										
										@foreach ($cates as $key => $value)
											<li><a href="">{{$value->cate_name}}</a></li>
										@endforeach
									</ul>
									
								</div>
							</li>
							<li><a href="{{getUrl("/")}}" title="">Home</a>
								<!-- <div class="sub-menu">
								</div> -->
							</li>
							<li><a href="#" title="">Fashion</a></li>
							<li><a href="#" title="">Sports</a></li>
							<li><a href="#" title="">Digital</a></li>
							<li><a href="#" title="">Furniture</a></li>
							<li><a href="#">Jewelry</a></li>
							<li><a href="#" title="">Blog</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="banner">
		@yield('banner')	
	</div>
	<div class="content">
            @yield('content')
    </div>  
	<footer>
		<div class="footer-top ">
			<div class="container">
				<img src="public/img/logo.png" alt="">
				<div class="nav ">
					<ul>
						<li>About us</li>
						<li>Affiliates</li>
						<li>Careers</li>
						<li>Privacy Policy</li>
						<li>Terms</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-div">
			<div class="footer-mid">
				<div class="container">
					<div class="new-letter">
						<p>SIGN UP BELOW FOR EARLY UPDATES</p>
						<p>You a Client , large or small, and want to participate in this adventure, please send us an email to tuannhph04848@fpt.edu.vn </p>
						<div class="inp">
							<input type="email" class="input-group col-lg-6 col-lg-offset-3" name="" value="" placeholder="E-mail address">
							<div class="input-group-btn">
								<button class="btn ">
									<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="footer-bot">
				<div class="container footer-bd">
					<div class="col-sm-3">
						<h5>INFOMATION</h5>
						<p>Example Street 68, Mahattan, New York, USA.</p>
						<p>1-899-353-2268</p>
						<p>support@kuttetheme.nnet</p>
					</div>
					<div class="col-sm-3">
						<h5>COMPANY</h5>
						<p>About us</p>
						<p>Testimonials</p>
						<p>Affillate Program</p>
						<p>Terms & Conditions</p>
						<p>Contact us</p>
					</div>
					<div class="col-sm-3">
						<h5>MY ACCOUNT</h5>
						<p>My Order</p>
						<p>My Wishlist</p>
						<p>My Credit Slip</p>
						<p>My Addresses</p>
						<p>My Personal In</p>

					</div>
					<div class="col-sm-3">
						<h5>SUPPORT</h5>
						<p>About us</p>
						<p>Testimonials</p>
						<p>Affillate Program</p>
						<p>Terms & Conditions</p>
						<p>Contact us</p>
					</div>
				</div>
				<div class="footer-copy">
					<div class="container">
						<p>Copyright © KuteShop. All Rights Reserved. Designed by: KuteThemes</p>
						<img src="public/img/pay.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</footer>	
	
</body>
	<script src="{{getUrl('public/plugins/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/jquery-validation/additional-methods.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/jquery-validation/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/js/main.js')}}" type="text/javascript"></script>
</html>	