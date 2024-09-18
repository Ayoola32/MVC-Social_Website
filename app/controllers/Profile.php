<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
use \Model\User;
use \Core\Session;

/** Profile class */

class Profile{
	use MainController;

	public function index(){
		$user_id = user('user_id');
		$ses = new Session();
		if (!$ses->is_logged_in()) {
			redirect('login');
		}
		
		// get user row
		$user = new User;
		$data['row'] = $user->first(['user_id' => $user_id]);

		$this->view('profile', $data);
	}

}
