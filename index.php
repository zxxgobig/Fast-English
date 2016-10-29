<?php

// 视图文件格式
define('VIEW_EXT','.php');

define('FILE',dirname(__FILE__) . '/');

define('CONN_CHARACTER','utf8');
if($_SERVER['HTTP_HOST'] == '127.0.0.1'){//本地
	define('URL','http://127.0.0.1/ibobao5.0/');
	define('CONN_HOST','localhost');
	define('CONN_DB','ibobao5');
	define('CONN_NAME','root');
	define('CONN_PASS','');
}else{
	define('URL','http://www.fastenglish.us/');
	define('CONN_HOST','localhost');
	define('CONN_DB','ibobao');
	define('CONN_NAME','ibobao');
	define('CONN_PASS','3914213abc');
}
//运行
require './run.php';