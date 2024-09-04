<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\User;
use \Core\Request;

/** signup class */

class Signup{
	use MainController;

	public function index(){
		$data = [];

		$req = new Request();
		if ($req->posted()) {
			$user = new User();
			if ($user->validate($req->post())) {

				// Save to database
				$user->insert($req->post());
				redirect('login');
			}

			$data['errors'] = $user->errors;
		}

		$this->view('signup', $data);
	}

}
