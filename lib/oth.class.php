<?php
class lib_oth{
	static function write($str){
		echo $str;
		exit;
	}
	static function jump($url){
		header("Location:" . URL . $url);
		exit;
	}
	static function back(){
		header("Location:" . $_SERVER["HTTP_REFERER"]);
		exit;
	}
	static function getIp(){
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), null )) 
		$ip = getenv("HTTP_CLIENT_IP"); 
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), null )) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
		else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), null )) 
		$ip = getenv("REMOTE_ADDR"); 
		else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], null)) 
		$ip = $_SERVER['REMOTE_ADDR']; 
		else 
		$ip = null ; 
		return($ip); 
	}
	//字符串截取
	static function substr($str, $from, $len) {
		return preg_replace(
							'#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'
							. $from . '}' . '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'
							. $len . '}).*#s', '$1', $str
						);
	}
}