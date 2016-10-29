<?php
class lib_i{
	static function getRoute(){
		return array_merge(explode('/', self::get('route')) ,array(null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null));
	}
	static function get($n){
		return isset($_GET[$n]) ? $_GET[$n] : null;
	}
	static function post($n){
		return isset($_POST[$n]) ? $_POST[$n] : null;
	}
	static function session($n){
		return isset($_SESSION[$n]) ? $_SESSION[$n] : null;
	}
	static function cookie($n){
		return isset($_COOKIE[$n]) ? $_COOKIE[$n] : null;
	}

}