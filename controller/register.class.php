<?php
class controller_register extends lib_controller{
	function __construct(){
		parent::__construct();
		if($this->memberMsg)lib_oth::jump('');
	}
	function index(){		

		//
		$this->display->data['cha'] = 'r';
		$this->display->title 		= '新用户注册';
		$this->display->cssspace 	= 'entryP';
		$this->display->keywords	= '';
		$this->display->description	= '';
		$this->display->htm('entry');

	}

	//验证码输出
	function captchaOutput(){
		session_start();
		$c = new lib_captcha;
		$c->showImg();
		$_SESSION['captchaA'] = strtolower($c->getCaptcha());
	}

	//提交注册表单
	private function judgeMemberUname($v){
		//if(!preg_match("/^(?!_)\w+$/i", $v))exit;//防注入
		$r = $this->db->alo(" SELECT count(*) FROM member WHERE uname='". $v ."' ");
		return $r[0] > 0 ? false : true;
	}
	function suAjax(){
		ob_start();
		session_start();
		$uname 	= trim(lib_i::post('uname'));
		$pass	= trim(lib_i::post('pass'));
		$code	= trim(lib_i::post('code'));
		if(strlen($uname) == 0){
			$err = 1;
		}else if(!preg_match("/^(?!_)\w+$/i", $uname)){
			$err = 2;
		}else if(!preg_match("/^.{1,12}$/i", $uname)){
			$err = 3;
		}else if(!$this->judgeMemberUname($uname)){
			$err = 7;
		}else if($pass == ''){
			$err = 4;
		}else if(!preg_match("/^.{6,18}$/i", $pass)){
			$err = 5;
		}else if($code != lib_i::session('captchaA')){
			$err = 6;
		}else{
			$pass = md5(md5($pass).'W+`j"b');
			$this->db->exec(" INSERT INTO member(
															`uname`,
															`upass`,
															`register_time`,
															`register_ip`
				) VALUES(
															'". $uname ."',
															'". $pass ."',
															'". time() ."',
															'". lib_oth::getIp() ."'
				) ");

			//自动登录
			setcookie('memberName',$uname,0,'/');
			setcookie('memberPass',$pass,0,'/');

			//清除验证码
			unset($_SESSION['captchaA']);

			$err = 'ok';
		}
		echo '
			{
				"err" : "' . $err . '"
			}
		';
	}
}






