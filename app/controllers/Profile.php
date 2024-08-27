<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/** Profile class */

class Profile{
	use MainController;

	public function index(){

		$this->view('profile');
	}

}
