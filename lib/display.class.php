<?php
class lib_display{

	public $route;
	public $title;
	public $keywords;
	public $description;
	public $cssspace;
	public $data;

	function __construct(){
		$this->route = lib_i::getRoute();
	}

	private function header($title=null ,$key=null ,$des=null){
		$htm = '';
		$htm .= '<!DOCTYPE html>';
		$htm .= '<html>';
		$htm .= '<head>';
		$htm .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		$htm .= '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
		$htm .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		$htm .= '<meta name="keywords" content="'. $key .'" />';
		$htm .= '<meta name="description" content="'. $des .'"/>';
		$htm .= '<link rel="stylesheet" type="text/css" href="'. URL .'static/css/global.css?' . filemtime(FILE . 'static/css/global.css') . '" />';
		//$htm .= '<script type="text/javascript" src="'. URL .'static/js/jquery.js?' . filemtime(FILE . 'static/js/jquery.js') . '"></script>';
		$htm .= '<script type="text/javascript">';
		$htm .= '
					var CONF = {};
					CONF.URL = "' . URL . '";
				';
		$htm .= '</script>';
		$htm .= '<script type="text/javascript" src="'. URL .'static/js/jquery.js?' . filemtime(FILE . 'static/js/jquery.js') . '"></script>';
		//$htm .= '<script type="text/javascript" src="'. URL .'static/js/global.js?' . filemtime(FILE . 'static/js/global.js') . '"></script>';
		$htm .= '<title>' . $title . '</title>';
		$htm .= '</head>';
		$htm .= '<body class="' . $this->cssspace . '">
		';
		return $htm;
	}
	private function footer(){
		$htm = '<div id="theAddHTMLs">{js}</div>';
		$htm .= '<script type="text/javascript" src="'. URL .'static/js/global.js?' . filemtime(FILE . 'static/js/global.js') . '"></script>';
		$htm .= '</body></html>';
		return $htm;
	}
	public function mhtm($h){//迷你视图
		echo $this->header($this->title);
		echo $h;
		echo $this->footer();
	}
	public function htm($file){//调用视图文件
		echo $this->header($this->title,$this->keywords,$this->description);
		require FILE . 'view/' . $file . VIEW_EXT;
		echo $this->footer();
	}
	public function json(){

	}
}


