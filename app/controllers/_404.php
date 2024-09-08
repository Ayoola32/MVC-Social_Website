<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Core\Session;


class _404{
	use MainController, \Model\Database;
	
	public function index(){
		$ses = new Session();
		if (!$ses->is_logged_in()) {
			redirect('login');
		}

		$this->view('404');
	}
}
