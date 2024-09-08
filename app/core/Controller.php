<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

Trait MainController{

	public function view($name, $data =[]){
		if (!empty($data)) {
			extract($data);
		}
		
		$filename = "../app/views/".$name.".view.php";
		$filename2 = "../app/views/includes/".$name.".view.php";
		if(file_exists($filename)){
			require $filename;
		}else if(file_exists($filename2)){
			require $filename2;
		}else{

			$filename = "../app/views/404.view.php";
			require $filename;
		}
	}
}