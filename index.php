<?php 
session_start();
// session_destroy();
use App\Controller\BaseController;
// if(!isset($_SESSION['auth']['name']) || count($_SESSION['auth']) == 0){
//     	 header('location: login');
//     die;
//   }
// include_once 'commons/utils.php';
if(!isset($_SESSION['CART'])){
	$_SESSION['CART']=[];
}
	
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$msg = isset($_GET['msg']) == true ? $_GET['msg'] : "/";

		
require_once './vendor/autoload.php';
use Route\CustomRoute;
CustomRoute::init($url);

?>