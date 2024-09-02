<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

Trait Database {
    public $conn;

    public function __construct(){
        $this->getConnection();
    }

    public function getConnection() {
        $this->conn = null;
        try {
            $string = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
            $this->conn = new \PDO($string, DBUSER, DBPASS);  // Use \PDO to avoid namespace issues
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
            // echo "Database connected successfully.";
        } catch (\PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function query($sql, $data = []) {
        if ($this->conn === null) {
            throw new \Exception("Database connection is not established.");
        }

        $stmt = $this->conn->prepare($sql);
        $check = $stmt->execute($data);
        if ($check) {
            $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }

    public function get_row($query, $data = []){

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if($check){
			$result = $stm->fetchAll(\PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result[0];
			}
		}

		return false;
	}
	
}


