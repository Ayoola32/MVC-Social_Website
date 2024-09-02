<?php 

defined('ROOTPATH') OR exit('Access Denied!');

spl_autoload_register(function($classname){

	$classname = explode("\\", $classname);
	$classname = end($classname);
	
	// Define the paths to core and model files
	$core_path = "../app/core/{$classname}.php";
	$controller_path = "../app/controllers/{$classname}.php";
	$model_path = "../app/models/{$classname}.php";

	// Include the class file if it exists
    if (file_exists($core_path)) {
        require_once $core_path;
    } elseif (file_exists($controller_path)) {
        require_once $controller_path;
    } elseif (file_exists($model_path)) {
        require_once $model_path;
    }
	
});

require 'config.php';
require 'Controller.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Pager.php';
require 'Request.php';
require 'Session.php';
require 'App.php';







