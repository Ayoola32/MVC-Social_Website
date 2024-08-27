<?php 

defined('ROOTPATH') OR exit('Access Denied!');

if($_SERVER['SERVER_NAME'] == 'localhost'){
	/** database config **/
	define('DBNAME', 'mvc-social');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/MVC-Social_Website/public');

}else{
	/** database config **/
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.');

}

define('APP_NAME', "Abusidiq MVC-Social Website");
define('APP_DESC', "PHP MVC framework for building social website");

/** true means show errors **/
define('DEBUG', true);
