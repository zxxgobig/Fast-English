<?php
class controller_note extends lib_controller{
	function __construct(){
		parent::__construct();
		if(!$this->memberMsg)lib_oth::jump('login');
	}

	function index(){	
		lib_oth::jump('note/unlearn');
	}
	//添加句子
	function addSentenceAjax(){
		$ch = trim(lib_i::post('ch'));
		$en = trim(lib_i::post('en'));
		if(strlen($en) < 5){
			$err = 1;
		}elseif(strlen($en) > 140){
			$err = 2;
		}elseif(strlen($ch) > 140){
			$err = 3;
		}else{
			$err = 'ok';
			$this->db->exec(" INSERT INTO note(
								`member_id`,
								`member_uname`,
								`encont`,
								`chcont`,
								`fromarticleid`,
								`timeinsert`
							) VALUES(
								'". $this->memberMsg['id'] ."',
								'". $this->memberMsg['uname'] ."',
								'". lib_filt::htmlT2(lib_filt::inject($en)) ."',
								'". lib_filt::htmlT2(lib_filt::inject($ch)) ."',
								'',
								'".time()."'				
							) ");
		}
		echo '
			{
				"err" : "' . $err . '"
			}
		';
	}
	//加载更多句子
	function showMoreSentence(){
		$page = intval(lib_i::get('page'));
		$cla  = intval(lib_i::get('cla'));
		$p = ($page - 1) * 10;
		$sql = " SELECT * FROM note WHERE member_id='". $this->memberMsg['id'] ."'  AND learn=$cla  ORDER BY id DESC LIMIT $p,10 ";
		$r = $this->db->arr($sql);
		echo json_encode($r);
	}
	//加载测试句子
	function getTestSentence(){
		$page = intval(lib_i::get('page'));
		$sql = " SELECT * FROM note WHERE member_id='". $this->memberMsg['id'] ."'  AND learn=0 AND chcont<>''  ORDER BY id DESC LIMIT $page,1 ";
		$r = $this->db->arr($sql);
		echo json_encode($r);
	}
	//标记单个句子
	function setSentenceLearnOrUnlearn(){
		$id 	= intval(lib_i::get('id'));
		$learn 	= lib_i::get('learn') ? 1 : 0;//已掌握或未掌握
		$this->db->exec(" UPDATE note SET learn=". $learn ." WHERE id='$id' AND  member_id='". $this->memberMsg['id'] ."'  ");
		echo '{"err":"ok"}';
	}
	function unlearn(){		
		//$sql_column = $getColumn ? " WHERE `column`='$getColumn' " : "";" . $sql_column . "
		$sql = " SELECT * FROM note WHERE member_id='". $this->memberMsg['id'] ."'  AND learn=0  ORDER BY id DESC LIMIT 10";
		$this->display->data['noteList'] = $this->db->arr($sql);
		//

		$this->display->title = '未掌握';
		$this->display->cssspace 	= 'noteP';
		$this->display->htm('note');
	}
	function test(){		
		//$sql_column = $getColumn ? " WHERE `column`='$getColumn' " : "";" . $sql_column . "
		$sql = " SELECT * FROM album  ORDER BY id DESC LIMIT 12";//LIMIT 8
		$this->display->data['albumList'] = $this->db->arr($sql);
		//

		$this->display->title = '轮流测试';
		$this->display->cssspace 	= 'noteP';
		$this->display->htm('note');
	}
	function learn(){		
		//$sql_column = $getColumn ? " WHERE `column`='$getColumn' " : "";" . $sql_column . "
		$sql = " SELECT * FROM note WHERE member_id='". $this->memberMsg['id'] ."' AND learn=1 ORDER BY id DESC LIMIT 10";
		$this->display->data['noteList'] = $this->db->arr($sql);
		//


		$this->display->title = '已掌握';
		$this->display->cssspace 	= 'noteP';
		$this->display->htm('note');
	}
	function collect(){		
		//$sql_column = $getColumn ? " WHERE `column`='$getColumn' " : "";" . $sql_column . "
		$sql = " SELECT * FROM album  ORDER BY id DESC LIMIT 12";//LIMIT 8
		$this->display->data['albumList'] = $this->db->arr($sql);
		//


		$this->display->title = '收藏夹';
		$this->display->cssspace 	= 'noteP';
		$this->display->htm('note');
	}
}






