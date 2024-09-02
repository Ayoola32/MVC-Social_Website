<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\User;

/** signup class */

class Signup{
	use MainController;

	public function index(){
		$user = new User();
		$user->create_table();

		$this->view('signup');
	}

}
