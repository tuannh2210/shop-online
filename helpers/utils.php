<?php 
use App\Model\Product;
function getTotalCartItem(){
	$countItem = 0;
	$cartArr = $_SESSION['CART'];
	
	foreach ($cartArr as $item) {
		$countItem += $item['quantity'];
	}
	return $countItem;
}

function addItemToCart($product = []){
	$cartArr = $_SESSION['CART'];
	
	$flag = false;
	for ($i=0; $i < count($cartArr); $i++) { 
		if($product['id'] == $cartArr[$i]['id']){
			$cartArr[$i]['quantity']++;
			$flag = true;
			break;
		}
	}
	if($flag == false){
		$product['quantity'] = 1;
		array_push($cartArr, $product);
	}

	$_SESSION['CART'] = $cartArr;
}
// lấy ra url gốc của project
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];

	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');

	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}

	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
}



 ?>