<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Core\Session;

/** Logout class */

class Logout{
	use MainController;
	
	public function index(){
		$ses = new Session();
		$ses->logout();
		redirect('login');		
	}

}
