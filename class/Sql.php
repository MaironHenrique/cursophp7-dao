<?php

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);
			
		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	public function execQuery($rawQuery, $params = array())  
    {   // chamei o query. $rawQuery = é query bruta. 
        //$params = dados que estarão na query(independente de qual query seja)   
 
        $stmt = $this->conn->prepare($rawQuery); // preparando a query.
 
        $this->setParams($stmt, $params);
 
        $stmt->execute();
 
        return $stmt;
    }

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->execquery($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

?>