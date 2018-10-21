<?php 
namespace App\Model;

use App\Model\BaseModel;
use App\Model\User;
/**
* 
*/
class ForgotPassword extends BaseModel
{
	public $tableName = 'forgot_password';
	public $columns = [	'email', 'token', 'created_date'];
	
}
 ?>