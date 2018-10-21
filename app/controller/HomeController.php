<?php
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\User;
use App\Model\Product;
use App\Model\ProductImage;
use App\Model\Category;	
class HomeController extends BaseController
{	
	
	function notFount(){
		return $this->render("not-found",  compact('cart'));
	}
	function index(){
		$cates = Category::all();
		$pro = Product::where(['feature_image',">","0"])->orderBy(['name'])->limit(['8'])->get();
		// dd($pro);
		return $this->render("client/index",  compact('pro','cates','p'));
	}
	function detailCart(){
		$cart = $_SESSION['CART'];
		$cates = Category::all();
		return $this->render("client/cart", compact('cart','cates'));
	}
	function addToCard(){
		$id = $_GET['id'];
		$product = Product::findOne($id);
		$item = [
			'id' => $product->id,
			'name' => $product->name,
			'price' => $product->price,
			'feature_image'=>$product->feature_image

		];
		// them san pham vao trong gio hang
		addItemToCart($item);
		return $this->redirect('#');
	}
	function resertCart(){
		 $_SESSION['CART']=[];
		return $this->redirect('/');
	}
	function catePro(){
		$id = $_GET['id'];
		$cates = Category::all();
		$products = Product::where(['cate_id', $id])->get();
		// print_r($products);die;

		// $owner = product::findOne(4);
		return $this->render('client/cate-pro',compact('products','cates'));

	} 
	

}

  ?>

