<?php
class controller_article extends lib_controller{
	function __construct(){
		parent::__construct();
		$this->display->data['get_class'] = null;
		$this->display->data['columnList'] = $this->db->arr(" SELECT * FROM articleclass ORDER BY id ASC ");
		$this->display->cssspace 	= 'articleP';
	}
	function index(){		
		
		$this->display->data['indexslide'] = $this->db->alo(" SELECT * FROM indexslide ORDER BY id DESC ");
		
		$this->display->data['daysentence'] = $this->db->alo(" SELECT * FROM daysentence ORDER BY id DESC ");
		$this->display->data['contLists'] 	= $this->db->arr(" SELECT * FROM article ORDER BY recommend DESC, id DESC ");
		//
		$this->display->title 		= '急速英语';
		$this->display->keywords	= '';
		$this->display->description	= '';
		$this->display->htm('article/article');

	}
	function x(){
		$get_id = intval($this->route['2']);
		//

		$this->db->exec(" UPDATE article SET count_click=count_click+1 WHERE id='$get_id'  ");

		//
		$this->display->data['cont'] = $cont = $this->db->alo(" SELECT * FROM article WHERE id='$get_id' ");
		$this->display->title 		= $cont['chtitle'].'|'.$cont['entitle'];
		$this->display->keywords	= '';
		$this->display->description	= '';
		$this->display->htm('article/x');
	}
	function l(){

		$this->display->data['get_class'] = $get_class = lib_i::get('c');

		//

		if(!$articleClass = $this->db->alo(" SELECT * FROM articleclass WHERE enname='". lib_filt::inject($get_class) . "' "))//文章分类
			lib_oth::jump('article');

		$filt_list = " WHERE articleclass_id='". $articleClass['id'] ."' ";
		$this->display->data['list'] = $this->db->arr(" SELECT * FROM article ". $filt_list ." ORDER BY id DESC ");


		$this->display->title 		=  $articleClass['chname'] . ' - 资料库';
		$this->display->keywords	= '';
		$this->display->description	= '';
		$this->display->htm('article/list');
	}

}






