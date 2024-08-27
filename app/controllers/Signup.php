<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/** signup class */

class Signup{
	use MainController;

	public function index(){

		$this->view('signup');
	}

}
