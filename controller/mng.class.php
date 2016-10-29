<?php
class controller_mng extends lib_controller{
	function __construct(){
		parent::__construct();
		session_start();

		//登录检测和信息
		$this->adminMsg = $this->display->data['adminMsg'] = $adminMsg = $this->db->alo(" SELECT * FROM admin WHERE name='". lib_i::session('adminName') ."' AND pass='". lib_i::session('adminPass') ."' ");
		if(!$adminMsg && $this->route[1] !== 'login')lib_oth::jump('mng/login');//未登录跳出

		$this->display->cssspace 	= 'mngP';
	}
	function index(){		
		
		//
		$this->display->title 		= '管理';
		$this->display->htm('mng/index');

	}
	function login(){
		//echo ;
		if(lib_i::post('pass')){
			$_SESSION['adminName'] = lib_i::post('name');
			$_SESSION['adminPass'] = md5(md5(lib_i::post('pass')).'xiamo.me');
			lib_oth::jump('mng');
		}
		$this->display->title 		= '登录到管理';
		$this->display->htm('mng/login');
	}
	function logout(){
		unset($_SESSION['adminName']);		
		unset($_SESSION['adminPass']);		
		lib_oth::jump('mng/login');
	}
	//删除数据
	function deleteData(){
		$get_table 		= lib_i::get('table');//对应的表
		$get_id 		= lib_i::get('id');//主键
		//删除主配图
		$f = $this->db->alo(" SELECT * FROM $get_table WHERE id='$get_id' ");
		if(isset($f['img']))@unlink(FILE.'data/img/'. $get_table .'/'.$f['img']);
		//从数据库删除
		$this->db->exec(" DELETE FROM $get_table WHERE id='$get_id' ");
		lib_oth::back();
	}
	//修改数据
	function changeData(){
		$get_table		= lib_i::get('table');
		$get_change		= lib_i::get('change');
		$get_to			= lib_i::get('to');
		$get_id			= lib_i::get('id');
		$this->db->exec(" UPDATE $get_table SET $get_change=$get_to WHERE id='$get_id' ");
		lib_oth::back();
	}
	//编辑文章
	function articleEdit(){
		$get_id = $this->display->data['get_id'] = lib_i::get('id');
		//提交含图片
		if(!$get_id && isset($_FILES['img'])){//新增文章时上传
			$upImg = new lib_upload();// 实例化上传类
			$upImg->postName = 'img';
			$upImg->set_name = time().rand(100,999);
			$upImg->set_path = FILE.'data/img/article/';
			$upImg->set_type = array('jpg','png','gif');
			$upImg->set_size = 1024 * 1024 * 30;
			$upImg->run();
			//echo $upImg->err;
			lib_image::resizeWidth($upImg->re['newPath'], $upImg->re['newPath'], 287);
		}
		//提交内容
		$entitle 	= lib_i::post('entitle');
		$chtitle 	= lib_i::post('chtitle');
		$class 		= lib_i::post('class');
		$source 	= lib_i::post('source');
		$redact 	= lib_i::post('redact');
		$translate 	= lib_i::post('translate');
		$cont 		= lib_filt::htmlT1(lib_i::post('cont'));
		if($entitle){
			if($get_id){//修改模式
				$this->db->exec(" UPDATE article SET 
														`entitle`='" . $entitle . "',
														`chtitle`='" . $chtitle . "',
														`articleclass_id`='" . $class . "',
														`cont`='" . $cont . "',
														`source`='". $source ."',
														`redact`='". $redact ."',
														`translate`='". $translate ."'
								WHERE 
														id='$get_id'
				 				");
			}else{//添加模式
				$this->db->exec(" INSERT INTO article(
															`entitle`,
															`chtitle`,
															`articleclass_id`,
															`cont`,
															`date_add`,
															`img`,
															`source`,
															`redact`,
															`translate`
								)VALUES(
															'" . $entitle . "',
															'" . $chtitle . "',
															'" . $class . "',
															'" . $cont . "',
															'" . time() . "',
															'" . $upImg->re['newName'] . "',
															'" . $source . "',
															'" . $redact . "',
															'" . $translate . "'
								) ");
			}
		}

		$this->display->data['columnList'] = $this->db->arr(" SELECT * FROM articleclass ORDER BY id ASC ");

		$this->display->data['cont'] = $get_id ? $this->db->alo(" SELECT * FROM article WHERE id='$get_id' ") : null;

		$this->display->title = '编辑文章';
		$this->display->htm('mng/articleEdit');
	}
	//编辑每日一句
	function daysentenceEdit(){
		$ch 			= lib_i::post('ch');
		$en 			= lib_i::post('en');

		$setprinttime 	= lib_i::post('setprinttime');

		//提交
		if($en){
			$this->db->exec(" INSERT INTO daysentence(
															`chcont`,
															`encont`,
															`inserttime`,
															`setprinttime`
							)VALUES(
															'". $ch ."',
															'". $en ."',
															'". time() ."',
															'". $setprinttime ."'
							)");
		}

		$this->display->title = '编辑每日一句';
		$this->display->htm('mng/daysentenceEdit');
	}
	//编辑首页幻灯
	function indexslideEdit(){
		$title 			= lib_i::post('title');
		$link 			= lib_i::post('link');

		//提交含图片
		if(isset($_FILES['img'])){//新增文章时上传
			$upImg = new lib_upload();// 实例化上传类
			$upImg->postName = 'img';
			$upImg->set_name = time().rand(100,999);
			$upImg->set_path = FILE.'data/img/indexslide/';
			$upImg->set_type = array('jpg','png','gif');
			$upImg->set_size = 1024 * 1024 * 30;
			$upImg->run();
			//echo $upImg->err;
		}
		//提交
		if($link){
			$this->db->exec(" INSERT INTO indexslide(
															`title`,
															`link`,
															`img`,
															`date_add`
							)VALUES(
															'". $title ."',
															'". $link ."',
															'". $upImg->re['newName'] ."',
															'". time() ."'
							)");
		}

		$this->display->title = '编辑首页幻灯';
		$this->display->htm('mng/indexslideEdit');
	}

	//数据管理列表
	function dataList(){
		$get_table = $this->display->data['table'] = lib_i::get('table');
		$this->display->data['list'] = $this->db->arr(" SELECT * FROM $get_table  ORDER BY id DESC ");
		switch ($get_table) {
			case 'indexslide':
				$list_key = array(
									'title'=>'标题',
									'link'=>'链接',
									'img'=>'图片',
									'date_add'=>'添加时间'
								);
				$list_fun = array(
									'link'=>array(
													array(
														'img',
														URL . 'data/img/indexslide/',
														'img'
														)
												),
									'time'=>array(
													'date_add',
													''
												)
								);
				break;
			case 'member':
				$list_key = array(
									'uname'=>'用户名',
									'register_time'=>'注册时间',
									'register_ip'=>'注册IP',
									'login_time'=>'登录时间',
									'login_ip'=>'登录IP'
								);
				$list_fun = array(
									'link'=>array(
													array(
														'',
														null,
														''
														)
												),
									'time'=>array(
													'register_time',
													'login_time'
												)
								);
				break;
			case 'note':
				$list_key = array(
									'member_id'=>'用户ID',
									'member_uname'=>'用户名',
									'encont'=>'英文句',
									'chcont'=>'中文句',
									'timeinsert'=>'添加时间'
								);
				$list_fun = array(
									'link'=>array(
													array(
														'',
														null,
														''
														)
												),
									'time'=>array(
													'timeinsert',
													''
												)
								);
				break;
			case 'article':
				$list_key = array(
									'entitle'=>'英文标题',
									'chtitle'=>'中文标题',
									'date_add'=>'添加时间'
								);
				$list_fun = array(
									'link'=>array(
													array(
														'entitle',
														URL . 'article/x/',
														'id'
														)
												),
									'time'=>array(
													'date_add',
													''
												)
								);
				break;
			case 'daysentence':
				$list_key = array(
									'chcont'=>'中文句',
									'encont'=>'英文句',
									'inserttime'=>'添加时间',
									'setprinttime'=>'输出时间'
								);
				$list_fun = array(
									'link'=>array(
													array(
														'',
														null,
														''
														)
												),
									'time'=>array(
													'inserttime',
													'setprinttime'
												)
								);
				break;
		}

		$this->display->data['list_key'] = $list_key;
		$this->display->data['list_fun'] = $list_fun;
		$this->display->title = '数据管理列表';
		$this->display->htm('mng/dataList');
	}
}






