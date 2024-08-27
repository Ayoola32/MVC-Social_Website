<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/** User_settings class */

class Settings{
	use MainController;

	public function index(){

		$this->view('settings');
	}

}
