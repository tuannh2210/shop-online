<?php 
namespace App\Model;
use PDO;
class BaseModel
{
	function insert(){

		$sql = "insert into $this->tableName ";
		$sql .= "(";
		foreach ($this->columns as $col) {
			if(isset($this->{$col})){
				$sql .= " $col, ";
			}
			
		}
		$sql = rtrim($sql, ", ");
		$sql .= ")";
		$sql .= " values ";
		$sql .= "(";
		foreach ($this->columns as $col) {
			if(isset($this->{$col})){
				$sql .= "'".$this->{$col}. "', ";
			}
		}
		$sql = rtrim($sql, ", ");
		$sql .= ")";
		// var_dump($sql);die;
		$conn = $this->getConnect();
		
		$conn->beginTransaction(); 
		
		try{

			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$this->id = $conn->lastInsertId(); 
			$conn->commit(); 
			if($this->id > 0){
				return $this;
			}

			return false;
		}
		catch(PDOException $ex){
			$conn->rollback(); 
			return false;
		}
	}

	function update(){

		$sql = "update $this->tableName ";
		$sql .= " set ";
		foreach ($this->columns as $col) {
			$sql .= " $col = '" . $this->{$col} ."', ";
		}
		$sql = rtrim($sql, ", ");
		
		$sql .= " where id = '" . $this->id ."' ";
		$conn = $this->getConnect();
		$conn->beginTransaction(); 
		
		try{

			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$conn->commit(); 
			return $this;
		}
		catch(PDOException $ex){
			$conn->rollback(); 
			return false;
		}
	}

	static function where($arr = []){
		// tao ra lop static 
		$model = new static();

		// xay dung ra cau select voi table name tu lop static
		$model->queryBuilder = "select * from " . $model->tableName;

		$model->queryBuilder .= " where ";
		if(count($arr) == 2){
			$model->queryBuilder .= $arr[0] . " = '$arr[1]'"; 

		}
		if(count($arr) == 3){
			$model->queryBuilder .= $arr[0] . " " . $arr[1] . " '$arr[2]'"; 			
		}
		
		return $model;
	}
	 function limit($arr = []){
		// tao ra lop static 
		$this->queryBuilder .= " limit ";
			$this->queryBuilder .= $arr[0] ; 
		return $this;
	}
	function andWhere($arr = []){
		$this->queryBuilder .= " and ";
		if(count($arr) == 2){
			$this->queryBuilder .= $arr[0] . " = '$arr[1]'"; 
		}
		if(count($arr) == 3){
			$this->queryBuilder .= $arr[0] . " " . $arr[1] . " '$arr[2]'"; 
		}
		
		return $this;
	}

	function orWhere($arr = []){
		$this->queryBuilder .= " or ";
		if(count($arr) == 2){
			$this->queryBuilder .= $arr[0] . " = '$arr[1]'"; 
		}
		if(count($arr) == 3){
			$this->queryBuilder .= $arr[0] . " " . $arr[1] . " '$arr[2]'"; 
		}
		
		return $this;
	}

	static function all(){
		// tao ra lop static 
		$model = new static();

		// xay dung ra cau select voi table name tu lop static
		$model->queryBuilder = "select * from " . $model->tableName;
		return $model->get();
	}

	static function findOne($id){
		// tao ra lop static 
		$model = new static();

		// xay dung ra cau select voi table name tu lop static
		$model->queryBuilder = "select * from " . $model->tableName
								. " where id = '$id'";
		$result = $model->get();
		if(count($result) == 0){
			return null;
		}

		return $result[0];
	}

	function first(){
		$result = $this->get();
		if(count($result) > 0){
			return $result[0];
		}

		return null;
	}

	function orderBy($arr = []){
		if(strpos($this->queryBuilder, 'order by') === false){
			$this->queryBuilder .= " order by ";
		}else{
			$this->queryBuilder .= ", ";
		}
		
		if(count($arr) == 1){
			$this->queryBuilder .= $arr[0]. " asc ";
		}else if(count($arr) == 2){
			$this->queryBuilder .= $arr[0]. " " . $arr[1] . " ";
		}
		return $this;
	}

	function delete(){
		try{
			$this->queryBuilder = "delete from $this->tableName where id = '$this->id'";
			$conn = $this->getConnect();
			$stmt = $conn->prepare($this->queryBuilder);
			$stmt->execute();
			return true;
		}catch(Exception $ex){
			var_dump($ex->getMessage());
			return false;
		}
	}

	function get(){
		$conn = $this->getConnect();
		$stmt = $conn->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $result;
	}

	function fill($requestArr = []){
		foreach ($this->columns as $key) {
			$this->{$key} = $requestArr[$key];
		}
	}
	

	function getConnect()
	{
		$servername = '127.0.0.1';
		$dbname = 'shop';
		$dbusername = 'root';
		$dbpwd = '';
		$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $dbusername, $dbpwd);

		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,TRUE);
		return $conn;
	}
}



 ?>
