<?php 
namespace App\Model;
use App\Model\BaseModel;
/**
* 
*/
class Category extends BaseModel
{
	public $tableName = 'categories';

	public $columns = [	'cate_name', 'parent_id'];

	// public function owner(){
	// 	$owner = User::findOne($this->created_by);
	// 	return $owner;
	// }
	
	function getParentName(){
		$parent = Category::findOne($this->parent_id);
		return $parent != null ? $parent->name : null;
	}
	public function cate(){
		$cate = Category::findOne($this->cate_id);
		return $cate;
	}
}

 ?>
