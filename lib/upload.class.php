<?php
//|——————————————————————————————————————————————————————————
//|Copyright (c) 2014 http://xiamo.me All rights reserved.
//| by 夏墨
//|——————————————————————————————————————————————————————————

/*
	示例
	if(I('FILES','dddttt')){//判断文件是否进入上传函数
		$upImg = new Upload();// 实例化上传类
		$upImg->postName = 'dddttt';
		$upImg->set_name = time().rand(100,999);
		$upImg->set_path = PRO_PATH.'Data/';
		$upImg->set_type = array('jpg','png','gif');
		$upImg->set_size = 1024 * 1024 * 5;
		$upImg->run();
		echo $upImg->err;
	}
	echo '<form method="post" enctype="multipart/form-data"><input type=file name=dddttt /><input type="submit" /></form>';
*/
class lib_upload{

    public $err;

    public $postName;//提交的表单名
    public $set_name;//设定新名字
    public $set_path;//设定保存路径
    public $set_type = array('jpg','png','gif','rar');//允许的扩展名
    public $set_size;//设定最大大小 kb
    public $re = array(
        'oldName'=>'',
        'newName'=>'',
        'newPath'=>''
    );//返回的数据

    //私有
    private $file_name;
    private $file_type1;
    private $file_type2;
    private $file_size;
    private $file_tmp_name;
    private $file_error;
    
	function __construct(){
		//parent::__construct();
	}
    
	private function loading(){
		$postName 						= $this->postName;
		$this->re['oldName'] 			= $this->file_name = $_FILES[$postName]["name"];
		$this->file_type1 				= $_FILES[$postName]["type"];
		$this->file_type2 				= strtolower(end(explode('.',$_FILES[$postName]["name"])));
		$this->file_size 				= $_FILES[$postName]["size"];
		$this->file_tmp_name 			= $_FILES[$postName]["tmp_name"];
		$this->file_error 				= $_FILES[$postName]["error"];
	}
	
    private function judje(){
    	if(!in_array($this->file_type2,$this->set_type)){
    		$this->err = 1001;//文件类型错误
    		return false;
    	}
    	if($this->file_size > $this->set_size){
    		$this->err = 1002;//文件太大
    		return false;
    	}
    	
        return true;
    }
   
    //正式上传
    function upload(){
    	$this->re['newName'] = $new_name = $this->set_name.'.'.$this->file_type2;
    	$this->re['newPath'] = $new = $this->set_path.$new_name;//exit;
        move_uploaded_file($this->file_tmp_name,$new);    	
    }
    
    function run(){
    	$this->loading();
        if($this->judje()){
        	$this->upload();
        	$this->err = 'success';
        }
    }
}