<?php 
/**
* 
*/
namespace App;
class Test
{
	
	function getName()
	{
		echo "test->getname";
	}
}

/**
* 
*/
namespace Model;
class Test
{
	
	function getName()
	{
		echo "Test2->getAge";
	}
}


$model = new \App\Test();
$model->getName();



 ?>