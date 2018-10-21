<?php 
namespace Route;

 use App\Controller\HomeController;
 use App\Controller\UserController;
 use App\Controller\ProductController;
 use App\Controller\CategoryController;
 use App\Controller\ForgotPasswordController;
 use App\Controller\LoginController;
 use App\Controller\AuthController;

// use \Phroute\Phroute\RouteCollector;
// use \Phroute\Phroute\Dispatcher;

/**
 * summary
 */
class CustomRoute{
	public static function init($url){
		switch ($url) {
			case "/":
				$ctl = new HomeController();
				echo $ctl->index();
				break;
			case "cart":
				$ctl= new HomeController();
				echo $ctl->detailCart();
				break;	
			case "add-to-card";
				$ctl = new HomeController();
				echo $ctl->addToCard();
				break;
			case "resert-cart";
				$ctl = new HomeController();
				echo $ctl->resertCart();
				break;
			case "cates-pro":
				$ctl= new HomeController();
				echo $ctl->catePro();
				break;
			case "logout":
				$ctl = new UserController();
				echo $ctl->logout();
				break;
			case "register":
				$ctl = new UserController();
				echo $ctl->register();
				break;
			case "save-register":
				$ctl = new UserController();
				echo $ctl->saveRegister();
				break;
			case "login":
				$ctl = new UserController();
				echo $ctl->login();
				break;
			case "post-login":
				$ctl= new UserController();
				echo $ctl->postLogin();
				break;
			case  "admin":
				$ctl= new UserController();
				echo $ctl->admin();
				break;
			case "category":
				$ctl = new CategoryController();
				echo $ctl->cate(); 
				break;
			case "add-cate":
				$ctl = new CategoryController();
				echo $ctl->addCate();
				break;
			case "save-post-cate":
				$ctl = new CategoryController();
				echo $ctl->postSaveCate(); 
				break;
			case "remove-cate":
				$ctl = new CategoryController();
				echo $ctl->removeCate();
				break;
			case "update-cate":
				$ctl = new CategoryController();
				echo $ctl->updateCate();
				break;
			case "save-update-cate":
				$ctl = new CategoryController();
				echo $ctl->saveUpdateCate();
				break;
			case "user-pro":
				$ctl= new ProductController();
				echo $ctl->userPro();
				break;
			case "cate-pro":
				$ctl= new ProductController();
				echo $ctl->catePro();
				break;
			case "product":
			if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new ProductController();
				echo $ctl->ListPro();
				break;
			case "update-product":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new ProductController();
				echo $ctl->updateProduct();
				break;
			case "add-product":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new productController();
				echo $ctl->addProduct();
				break;
			case "post-save-product":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new ProductController();
				echo $ctl->postSaveProduct();
				break;
			case "save-update-product":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new ProductController();
				echo $ctl->saveUpdateProduct();
				break;
			case "remove-product":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new ProductController();
				echo $ctl->removeProduct();
				break;
			case "user":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new UserController();
				echo $ctl->listUser();
				break;
			case "update-user":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new UserController();
				echo $ctl->updateUser();
				break;
			case "remove-user":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
						 header('location:login ' );
				}
				$ctl = new UserController();
				echo $ctl->removeUser();
				break;
			case "save-update-user":
				if(!isset($_SESSION['AUTH'])||$_SESSION['AUTH']==null){
					 header('location:login ' );
				}
				$ctl = new UserController();
				echo $ctl->saveUpdateUser();
				break;
			case 'forgot-password':
				$ctl = new ForgotPasswordController();
				$ctl->forgotPassword();
				break;
			case 'forgot-submit':
				$ctl = new ForgotPasswordController();
				$ctl->sendForgotEmail();
				break;
			case 'reset-password':
				$ctl = new ForgotPasswordController();
				$ctl->resetPass();
				break;
			case "save-reset-pass":
				$ctl = new ForgotPasswordController();
				$ctl->saveResetPass();
				break;
			default:
				$ctl = new HomeController();
				echo $ctl->notFount();
				// require_once 'views/not-found.php';
				break;
			}

	}
}


 ?>