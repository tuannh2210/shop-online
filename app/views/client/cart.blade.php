@extends('client-layout')
@section('content')
	<div class="content">
		<div class="container">
			<ol class="breadcrumb">
					 <li><a href="{{getUrl('/')}}">Home</a></li>
					 <li class="active">Cart</li>
			</ol>
			<div class="cart-div" >
				<p class="title-cart">CART</p>
				<table class="table table-bordered">
					<tr>
						<th width="70"></th>
						<th >PRODUCT</th>
						<th class="pro-img" width="230">IMAGES</th>
						<th >PRICE</th>
						<th class="pro-quantity">QUANTITY</th>
						<th >TOTAL</th>
					</tr>
					<tr>
						@php 
							$totalCartPrice = 0;
						@endphp
						@foreach ($cart as $value)
						<tr>
							<td><a href="#"><span class="glyphicon glyphicon-remove" ></span></a></td>
							<td>{{ $value['name']}}</td>
							<td><img src="app/views/product/uploads/{{$value['feature_image']}}"></td>
							<td>{{ $value['price']}}</td>
							<td>{{ $value['quantity']}}</td>
							<td>
								{{ $value['quantity']*$value['price']}}
							</td>
							@php 
								$totalCartPrice += $value['quantity']*$value['price'];
							@endphp
						</tr>
						@endforeach
					</tr>
					<tr>
						<td colspan="6">
							<input type="text"  placeholder="Coupon code" style="float: left">
							<input type="submit" value="Aplly coupon" style="float: left ; margin-left: 10px">
							<input type="submit" class="up-cart" value="Update cart" disabled="disabled">
						</td>
					</tr>
				</table>
			</div>
			<div class="total col-lg-4 col-lg-offset-8">
				<table class="table">
					<caption>Cart totals</caption>
						<tr>
							<td>Subtotal</td>
							<td class="price">$ {{$_SESSION['TOTAL']=$totalCartPrice}} </td>

						</tr>
						<tr>
							<td>Total</td>
							<td> $ {{$_SESSION['TOTAL']=$totalCartPrice}} </td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="button">Proceed to checkout</button>
							</td>
						</tr>
				</table>
			</div>
		</div>
	</div>	
@endsection			