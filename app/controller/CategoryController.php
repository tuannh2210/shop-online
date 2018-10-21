<?php 
namespace App\Controller;
use App\Controller\BaseController;
use App\Model\User;
use App\Model\Product;
use App\Model\ProductImage;
use App\Model\Category;

class CategoryController extends BaseController
{
	function cate(){

		// $cates = Category::limit(['2']);
		$cates = Category::all();

		// dd($cates);
		return $this->render('category/cate',compact('cates'));
	}
	function addCate(){
		$cate = new Category();
		return $this->render('category/form', compact('cate'));
	}
	function postSaveCate(){
		$model = new Category();
		$model->cate_name = $_POST['cate_name'];
		$result = $model->insert();
		// if($result != false && $result->id > 0){
			return $this->redirect("category");
		// }
	}
	function removeCate(){
		$id = $_GET['id'];		
		$model = Category::findOne($_GET['id']);
		$model->delete();
		return $this->redirect("category");
	}	
	function updateCate(){
		$id = $_GET['id'];
		$model = Category::findOne($id);
		if(!$model){
			return $this->render('not-found');
		}
		return $this->render('category/form-update', compact('model'));
	}
	function saveUpdateCate(){
		$model = Category::findOne($_POST['id']);
		$model->cate_name= $_POST['cate_name'];
		$model->update();
		return $this->redirect("category");
	}

}


 ?>