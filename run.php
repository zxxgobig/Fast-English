<?php
date_default_timezone_set('PRC');//默认时区

function __autoload($class){
	$class = str_replace('_', '/', $class);
	$cf = FILE . $class . '.class.php';
	if(!file_exists($cf)){
		echo 'no find class file!';
		exit;
	}		
	require $cf;
}

$route = lib_i::getRoute();

$route[0] = $route[0] ? 'controller_' . $route[0] : 'controller_article';
$route[1] = $route[1] ?	$route[1] : 'index';

if(is_numeric($route[0])){
	$controller = new controller_num;
}else{
	$controller = new $route[0]();
}
	$controller->$route[1]();








