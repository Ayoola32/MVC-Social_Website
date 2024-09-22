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
			$formData = $req->post();

			// Check if username or email already exists
			if ($user->userExists($formData['username'], $formData['email'])) {
				$user->errors['exists'] = "Username or Email already exists";
			} else {
				// If validation passes
				if ($user->validate($formData)) {
					// Save to the database

					// Hash Password
					$randSalt = "alwayskeepchaseYOURgreatness2024tilleternity";
					$password = password_hash($req->post('password'), PASSWORD_BCRYPT, array($randSalt => 12 ));
					$req->set('password', $password);
					$req->set('date', date("Y-m-d H:i:s"));

					$user->insert($req->post());
					redirect('login');
				}
			}

			// Collect errors to show in the view
			$data['errors'] = $user->errors;
		}

		// Load signup view with errors (if any)
		$this->view('signup', $data);
	}

}
