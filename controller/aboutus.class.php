<?php
class controller_aboutus extends lib_controller{
	function __construct(){
		parent::__construct();
		
	}
	function index(){		
		
		//
		$this->display->data['cha'] = 'l';
		$this->display->title 		= '关于我们';
		$this->display->cssspace 	= 'aboutusP';
		$this->display->keywords	= '';
		$this->display->description	= '';
		$this->display->htm('aboutus');

	}
}






