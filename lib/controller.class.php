<?php
class lib_controller{

	public $route;
	protected $display;

	function __construct(){
		$this->route = $route = lib_i::getRoute();
		$this->db = new lib_db();
		$this->display = new lib_display();
		$this->display->title = '夏墨';

		$this->display->data['route'] = $route;
		$uname 	= trim(lib_i::cookie('memberName'));
		$pass	= trim(lib_i::cookie('memberPass'));
		$this->memberMsg 	= $this->display->data['memberMsg'] 
							= $this->db->alo(" SELECT * FROM member WHERE uname='". lib_filt::inject($uname) ."' AND upass='". lib_filt::inject($pass) ."' ");
							//var_dump($this->memberMsg);
	}
}