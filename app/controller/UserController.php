<?php 
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\User;
use App\Model\Product;
use App\Model\ProductImage;
use App\Model\Category;

class UserController extends BaseController
{
	function admin(){
		$users = User::all();
		return $this->render("user/dashboard", compact('users'));
	}

	function dd($value){
		var_dump($value);
		die;
	}

	function listUser(){
		$users = User::all();
		dd($users);
		return $this->render("user/index", compact('users'));
	}

	function updateUser(){
		$name= $_SESSION['AUTH'];
		$id = $_GET['id'];

		$model = User::findOne($id);
		$users = User::all();

		if(!$model){
			return $this->render('not-found');
		}

		else{
			return $this->render('user/form-update', compact('users', 'model'));
		}
	}

	function saveUpdateUser(){
		// $name= $_SESSION['AUTH'];
		$model = User::findOne($_POST['id']);
		$model->name = $_POST['name'];
		$model->email = $_POST['email'];

		if($_FILES['avatar']['tmp_name']){
			$avatar = $model->avatar = $_FILES['avatar']['name'];
			$images_tmp = $_FILES['avatar']['tmp_name'];
			$fileName = 'app/views/user/uploads/' . basename($_FILES["avatar"]["name"]);
			move_uploaded_file($_FILES['avatar']["tmp_name"], $fileName);
			// dd($avatar);
		}

		$model->update();
		return $this->redirect("user");
	}

	function removeUser(){
		$id=isset($_GET['id'])?$_GET['id']:null;
		// cung gan giong xoa sp thoi
		if($id && $model = User::findOne($id)){// neu co id dc set va tim dc nguoi dung
		// dau tin phai lay ra danh sach sp cua nguoi nay
			if($products = $model->getOwnProduct()){// lay ra san pham va kiem tra luon  nguoi nay co sp hay ko
				// co thi minh se lay ra tung sp r xoa truoc r moi xoa user
				foreach ($products as $p) {
					$p->delete();
				}
			}
			$model->delete();
		}
		return $this->redirect("user");
	}
	function register(){
		$user = new User();
		return $this->render('auth/register', compact('user'));
	}
	function saveRegister(){
		// $cfpass= $_POST['cfpass'];
		$model = new User();
		$name = $model->name = $_POST['name'];
 		$email= $model->email = $_POST['email'];
		$pass = $model->password = md5($_POST['pass']);
		$cfpass = $model->password = md5($_POST['cfpass']);
		$user = User::all();
		$user = User::where(['email', '=', $email])->first();
		// var_dump($user);
		// dd($email);
		if($email == ""|| $name ==""){
			 header('location: ' . getUrl('register?msg= Invalid data! '));
			 die;
		}
		else if($cfpass  != $pass ){
			 header('location: ' . getUrl("register?msg= These passwords don't match "));
			die;
		}
		else if(!$user){
			$result = $model->insert();
			if($result != false && $result->id > 0){
				return $this->redirect("login?msg=Register to success");
				die;
			}
		}
		else if ($user) {
			header('location: ' . getUrl("register?msg= That username is taken "));
		 	die;
		}	
	}
	function login(){
		if(isset($_SESSION['AUTH'])){
			header('location: ' . getUrl('admin'));
		}else
			return $this->render("auth/login");
	}

	function postLogin(){
		$name= $_POST['name'];
		$pass= $_POST['pass'];
		$user = User::where(['email','=',$name])->andWhere(['password','=',md5($pass)])->first() ||
				User::where(['name','=',$name])->andWhere(['password','=',md5($pass)])->first();
		// dd($user);
		if($user){
			$_SESSION['AUTH'] =	[
				'name' =>$user->name,
				'email' =>$user->email,
				'id' =>$user->id,
				'avatar'=>$users->avatar,
			];
			 header('location: ' . getUrl('admin'));
			
			die;
		}else {
			 header('location: ' . getUrl('login?msg= Wrong password/ussername '));
		}
	}
	function logout(){
		unset($_SESSION['AUTH']);
		header('location:' . getUrl('/'));
	}

	
}


 ?>