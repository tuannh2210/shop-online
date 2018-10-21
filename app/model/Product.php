<?php 
namespace App\Model;

use App\Model\BaseModel;
use App\Model\User;

/**
* 
*/
class Product extends BaseModel
{
	public $tableName = 'products';

	public $columns = [	'name', 'price', 'detail','feature_image', 'created_by','cate_id'];
	
	public function owner(){
		$owner = User::findOne($this->created_by);
		return $owner;
	}
	public function cate(){
		$cate = Category::findOne($this->cate_id);
		return $cate;
	}
}

 ?>
