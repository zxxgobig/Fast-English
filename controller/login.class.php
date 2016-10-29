<?php
class controller_login extends lib_controller{
	function __construct(){
		parent::__construct();
		
	}
	private function loginSuCookie($n, $p, $t = 0){
		setcookie('memberName',$n,$t,'/');
		setcookie('memberPass',$p,$t,'/');
	}
	//注销
	function logOut(){
		ob_start();
		$this->loginSuCookie('','');
		lib_oth::jump('');
	}
	//登录
	function suAjax(){
		if($this->memberMsg)lib_oth::jump('');

		ob_start();
		$uname 	= trim(lib_i::post('uname'));
		$pass	= trim(lib_i::post('pass'));
		$r = $this->db->alo(" SELECT * FROM member WHERE uname='". lib_filt::inject($uname) ."' AND upass='". md5(md5($pass).'W+`j"b') ."' ");
		if($r){
			$this->loginSuCookie($r['uname'],$r['upass']);
			$err = 'ok';
		}else{
			$err = 1;
		}
		echo '
			{
				"err" : "' . $err . '"
			}
		';
	}

	function index(){		
		if($this->memberMsg)lib_oth::jump('');

		//
		$this->display->data['cha'] = 'l';
		$this->display->title 		= '登录';
		$this->display->cssspace 	= 'entryP';
		$this->display->keywords	= '';
		$this->display->description	= '';
		$this->display->htm('entry');

	}
}






