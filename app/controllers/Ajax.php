<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Core\Session;


class Ajax{
	use MainController;
	
	public function index(){
		$ses = new Session();
		if (!$ses->is_logged_in()) {
			die;
		}

        echo "WE good!";
	}
}
