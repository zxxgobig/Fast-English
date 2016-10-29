<?php
class model_htmPrint{
	static function albumColumn($v ,$en = false){
		switch ($v) {
			case 1:
				return $en ? 'paint' : '绘画';
			case 2:
				return $en ? 'cartoon' : '动画';
			case 3:
				return $en ? 'photo' : '摄影';
			case 4:
				return $en ? 'design' : '设计';
			default:
				return '';
		}
	}
}