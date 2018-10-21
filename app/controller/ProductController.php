<?php 
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\User;
use App\Model\Product;
use App\Model\ProductImage;
use App\Model\Category;
class ProductController extends BaseController{
	function userPro(){
		$id = $_GET['id'];
		$products = Product::where(['created_by', $id])->get();

		// $owner = product::findOne(4);
		return $this->render('product/user-pro',compact('products'));

	} 
	function catePro(){
		$id = isset($_GET['id']) ? $_GET['id']:'';
		$products = Product::where(['cate_id', $id])->get();
		// print_r($products);die;
		// dd(Product::where(['cate_id', $id]));
		// $owner = product::findOne(4);
		return $this->render('product/cate-pro',compact('products'));

	} 
	function ListPro(){
		$users = User::all();
		$pros = Product::all();
		return $this->render("product/index	",compact('pros','$users'));
	}
	function UserProduct(){
		$model = new Product();
		$product = Product::all();
		return $this->render('product/user-pro', compact('product', 'model'));
	}
	function addProduct(){
		$model = new Product();
		$users = User::all();
		$cate = Category::all();
		return $this->render('product/form', compact('users', 'model','cate'));
	}
	function postSaveProduct(){
		$model = new Product();
		$model->name = $_POST['name'];
		$model->price = $_POST['price'];
		$model->detail = $_POST['detail'];
		$feature_image = $model->feature_image = $_FILES['feature_image']['name'];
		$images_tmp = $_FILES['feature_image']['tmp_name'];
		$fileName = 'app/views/product/uploads/' . basename($_FILES["feature_image"]["name"]);
		move_uploaded_file($_FILES['feature_image']["tmp_name"], $fileName);
		// dd($fileName);
 		$model->created_by = $_POST['created_by'];
 		$model->cate_id = $_POST['cate_id'];
		$result = $model->insert();
		// dd($result);
		if($result != false && $result->id > 0){
			return $this->redirect("product");
		}
	}
	function updateProduct(){
		// $id = $_GET['id'];
		$id = isset($_GET['id'])? $_GET['id']: '';
		$model = Product::findOne($id);
		if(!$model){
			return $this->render('not-found');
		}
	// dd($model->cate_id);
		$users = User::all();
		// $users = $_SESSION['AUTH'];
		$cates = Category::all();
		return $this->render('product/form-update', compact('users', 'model','cates'));
	}
	function saveUpdateProduct(){
		$model = Product::findOne($_POST['id']);
		$model->name = $_POST['name'];
		$model->price = $_POST['price'];
		$model->detail = $_POST['detail'];
		$model->created_by = $_POST['created_by'];
		$model->cate_id= $_POST['cate_id'];
		
		if($_FILES['feature_image']['tmp_name']){
			$images_tmp= $_FILES['feature_image']['tmp_name'];
			$feature_image = $model->feature_image = $_FILES['feature_image']['name'];
			$fileName = 'app/views/product/uploads/'. basename($_FILES["feature_image"]["name"]);
			move_uploaded_file($_FILES['feature_image']["tmp_name"],$fileName);
			$model->update();
		}
		$model->update();
		return $this->redirect("product");
	}

	function removeProduct(){
		$id = $_GET['id'];		
		$model = Product::findOne($_GET['id']);
		$product = Product::findOne($id);
		$model->delete();
		return $this->redirect("product");
	}	
	
	
}
 ?>