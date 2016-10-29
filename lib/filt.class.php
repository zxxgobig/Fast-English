<?php
//|——————————————————————————————————————————————————————————
//|Copyright (c) 2014 http://xiamo.me All rights reserved.
//| by 夏墨
//|——————————————————————————————————————————————————————————

class lib_filt{

	//基本防注入过滤
	static public function inject($v){
		if(empty($v))return null;
		return addslashes($v);
		// $v 	= str_replace("_","\_",$v);
		// return str_replace("%","\%",$v);
	}

	//html标签过滤1
	static public function htmlT1($v ,$inversion=false){
		if(empty($v))return null;

		if($inversion){
			$v 	= preg_replace('/\<br\\>/is',"\r",$v);
			$v 	= str_replace("&lt;","<",$v);
			$v 	= str_replace("&gt;",">",$v);
			$v 	= str_replace("&#39;","'",$v);
			$v 	= str_replace("&quot;",'"',$v);
			$v 	= str_replace("&amp;",'&',$v);
		}else{			
			$v 	= str_replace("<","&lt;",$v);
			$v 	= str_replace(">","&gt;",$v);
			$v 	= str_replace("'","&#39;",$v);
			$v 	= str_replace('"',"&quot;",$v);
			$v 	= str_replace('&',"&amp;",$v);
			//$v 	= preg_replace('/\\n/is',"<br>",$v);
			$v 	= preg_replace('/\\r/is',"<br>",$v);
		}
		//htmlspecialchars_decode
		return $v;
	}

	//html标签过滤2
	static public function htmlT2($v ,$inversion=false){
		if(empty($v))return null;

		if($inversion){
			$v 	= str_replace("&lt;","<",$v);
			$v 	= str_replace("&gt;",">",$v);
			$v 	= str_replace("&#39;","'",$v);
			$v 	= str_replace("&quot;",'"',$v);
			$v 	= str_replace("&amp;",'&',$v);
		}else{			
			$v 	= str_replace("<","&lt;",$v);
			$v 	= str_replace(">","&gt;",$v);
			$v 	= str_replace("'","&#39;",$v);
			$v 	= str_replace('"',"&quot;",$v);
			$v 	= str_replace('&',"&amp;",$v);
		}
		//htmlspecialchars_decode
		return $v;
	}
	
	//过滤url
	static public function urlClear($v){
		return preg_replace('/([0-9a-z\.\/\-]+)\.([0-9a-z\.\/\-]+)/','*',$v);
	}
}