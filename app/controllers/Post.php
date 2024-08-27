<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/** Post class */

class Post{
	use MainController;

	public function index(){

		$this->view('post');
	}

}
