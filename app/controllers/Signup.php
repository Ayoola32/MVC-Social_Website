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

				// Hash Password
				$randSalt = "alwayskeepchaseYOURgreatness2024tilleternity";
				$password = password_hash($req->post('password'), PASSWORD_BCRYPT, array($randSalt => 12 ));
				$req->set('password', $password);
				$req->set('date', date("Y-m-d H:i:s"));

				$user->insert($req->post());
				redirect('login');

			}
			$data['errors'] = $user->errors;
		}

		$this->view('signup', $data);
	}

}
