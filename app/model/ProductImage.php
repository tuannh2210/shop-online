<?php 
namespace App\Model;

use App\Model\BaseModel;
use App\Model\User;

class ProductImage extends BaseModel
{
	public $tableName = 'product_images';

	public $columns = [	'id', 'url', 'product_id','images_text', 'images_link'];
	
	
	}

 ?>
