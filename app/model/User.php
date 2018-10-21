<?php 
namespace App\Model;

use App\Model\BaseModel;
use App\Model\Product;
/**
* 
*/
class User extends BaseModel
{
	public $tableName = 'users';
	
	public $columns = [	'name', 'email', 'password','avatar'];
	
	// public function owner(){
	// 	$owner = User::findOne($this->created_by);
	// 	return $owner;
	// }
	public function getOwnProduct(){
		$products = Product::where(['created_by', $this->id])->get();
		return $products;

	}
	
	public function getConutProduct(){
		$products = Product::where(['created_by', $this->id])->get();
		return count($products);
		
	}

	
	
}

 ?>