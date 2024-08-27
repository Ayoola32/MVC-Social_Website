<?php 

defined('ROOTPATH') OR exit('Access Denied!');

spl_autoload_register(function($classname){

	$classname = explode("\\", $classname);
	$classname = end($classname);
	require $filename = "../app/models/".ucfirst($classname).".php";
});

require 'config.php';
require 'Controller.php';
require 'Database.php';
require 'functions.php';
require 'Model.php';
require 'Pager.php';
require 'Request.php';
require 'Session.php';
require 'App.php';