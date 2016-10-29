<?php
class lib_db extends PDO{
	function __construct(){
		parent::__construct("mysql:host=".CONN_HOST.";dbname=".CONN_DB,CONN_NAME,CONN_PASS);
		$this->query("set character set '" . CONN_CHARACTER . "' ");
	}
	function arr($sql){
		$re = $this->query($sql);
		$re_o = array();
		if($re){
			while($row = $re->fetch()){
				$re_o[] = $row;
			}
		}
		return $re_o;
	}
	function alo($sql){
		$re = $this->query($sql);
		return $re->fetch();
	}
}