<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/** home class */

class Home{
    use MainController, \Model\Database; 

	public function __construct() {
		$this->getConnection(); 
	}
	
	
	public function index(){
		$this->view('home');
	}

}
