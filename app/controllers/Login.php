<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\User;
use \Core\Request;
use \Core\Session;

/** Login class */

class Login{
	use MainController;

	public function index(){
		$data = [];

		$req = new Request();
		if ($req->posted()) {

			$user  = new User();
			$email = $req->post('email');
			$password = $req->post('password');

			if ($row = $user->first(['email' => $email])){
				// Check if password is correct
				if (password_verify($password, $row->password)) {
					// Authenticate
					$ses = new Session();
					$ses->auth($row);

					redirect('home');
				}
			}
			$user->errors['email'] = "Wrong email or password";
			$data['errors'] = $user->errors;
			$this->view('login', $data);
		}

	}

}
