<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User class
 */
class User{
	
	use Model;

	protected $table = 'users';

	protected $allowedColumns = [

		'user_id',
		'username',
		'password',
		'email',
		'user_firstname',
		'user_lastname',
		'user_image',
		'date'
	];

	public function validate($data){
		$this->errors = [];

		if(empty($data['email'])){
			$this->errors['email'] = "Email is required";
		}else if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
			$this->errors['email'] = "Email is not valid";
		}

		if (empty($data['username'])) {
			$this->errors['username'] = "A username is required";
		} else if (!preg_match("/^[a-zA-Z0-9]+$/", $data['username'])) {
			$this->errors['username'] = "Username can only have letters and numbers with no spaces";
		}
		

		
		if(empty($data['password'])){
			$this->errors['password'] = "Password is required";
		}

		
		if(empty($data['terms'])){
			$this->errors['terms'] = "Please accept the terms and conditions";
		}


		if(empty($this->errors)){
			return true;
		}


		return false;
	}


	public function create_table(){
		$query = "
			CREATE TABLE IF NOT EXISTS users (
				user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
				username VARCHAR(50) NOT NULL,
				password VARCHAR(50) NOT NULL,
				email VARCHAR(50) NOT NULL,
				user_firstname VARCHAR(50) NOT NULL,
				user_lastname VARCHAR(50) NOT NULL,
				user_image TEXT,
				date DATETIME NULL,

				KEY idx_username (username),
				KEY idx_email (email)
			);
		";

		$this->query($query);
	}

















}