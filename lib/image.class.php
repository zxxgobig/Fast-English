<?php
//|——————————————————————————————————————————————————————————
//|Copyright (c) 2014 http://xiamo.me All rights reserved.
//| by 夏墨
//|——————————————————————————————————————————————————————————

class lib_image{

	//图片加水印
	static public function watermark($getFile,$saveFile, $getFile_watermark, $quality = 95){

    	if(!file_exists($getFile))return false;//文件不存在
    	list($getWidth,$getHeight,$getMime) = getimagesize($getFile);//大图信息
		
    	switch ($getMime){//根据格式创建图像
    		case 1://gif
    			return false;//<bug 不支持gif水印>
	    		$im = imagecreatefromgif($getFile);
	    		//$to_type = '.gif';
	    		break;
    		case 2://jpg
	    		$im = imagecreatefromjpeg($getFile);
	    		//$to_type = '.jpg';
	    		break;
    		case 3://png
	    		$im = imagecreatefrompng($getFile);
	    		//$to_type = '.png';
	    		break;
    		default:return false;//出错
    	}
    	

		if(!file_exists($getFile_watermark))return false;//水印文件不存在

		list($getWatermarkWidth,$getWatermarkHeight,$getWatermarkMime) = getimagesize($getFile_watermark);//水印信息
		$im_watermark = imagecreatefrompng($getFile_watermark);//生成水印预处理
		$set_x = $getWidth - $getWatermarkWidth;
		$set_y = $getHeight - $getWatermarkHeight;
		imagecopy($im,$im_watermark,$set_x,$set_y,0,0,$getWatermarkWidth,$getWatermarkHeight); 
  	
		
    	//存图像
    	switch ($getMime){//根据格式创建图像
    		case 1://gif
	    		imagegif ($im,$saveFile,$quality);
	    		break;
    		case 2://jpg
	    		imagejpeg ($im,$saveFile,$quality);
	    		break;
    		case 3://png
	    		imagejpeg ($im,$saveFile,$quality);//<BUG>
	    		break;
    	}

    	imagedestroy($im);//释放内存
    	imagedestroy($im_watermark);//释放内存
    	
	}

    //图片等比缩放                    //原图     保存       最大宽，        是否裁剪   质量       
    static public function resizeRatio($getFile, $saveFile, $setWidth = 120, $cut = 0, $quality = 95){
    	
    	if(!file_exists($getFile))return false;//文件不存在
    	list($getWidth,$getHeight,$getMime) = getimagesize($getFile);//大图信息
		
        //不符合缩放条件return
        if($setWidth > $getWidth || $setWidth > $getHeight){
			@copy($getFile,$saveFile);
			return;
		}
        //

    	switch ($getMime){//根据格式创建图像
    		case 1://gif
    			//return false;//<bug 不支持gif水印>
	    		$im = imagecreatefromgif($getFile);
	    		//$to_type = '.gif';
	    		break;
    		case 2://jpg
	    		$im = imagecreatefromjpeg($getFile);
	    		//$to_type = '.jpg';
	    		break;
    		case 3://png
	    		$im = imagecreatefrompng($getFile);
	    		//$to_type = '.png';
	    		break;
    		default:return false;//出错
    	}
    	
    	//缩放 		    	
    	if($getWidth < $getHeight){
    		$N = $setWidth / $getWidth;//求缩放比率%
	    	$to_height 	= $getHeight * $N;	    	
	    	$to_width 	= $setWidth;  
    	}else{
    		$N = $setWidth / $getHeight;//
	    	$to_width 	= $getWidth * $N;	  
	    	$to_height 	= $setWidth; 
    	}
    	if($cut){
			$imO = imagecreatetruecolor($setWidth,$setWidth);
		}else{
			$imO = imagecreatetruecolor($to_width,$to_height);
		}
	    imagecopyresampled($imO,$im,0,0,0,0,$to_width,$to_height,$getWidth,$getHeight);// 结构：目标图|原图

  	
		
    	//存图像
    	switch ($getMime){//根据格式创建图像
    		case 1://gif
	    		imagegif ($imO,$saveFile,$quality);
	    		break;
    		case 2://jpg
	    		imagejpeg ($imO,$saveFile,$quality);
	    		break;
    		case 3://png
	    		imagejpeg ($imO,$saveFile,$quality);//<BUG>
	    		break;
    	}
    	imagedestroy($imO);//释放内存    	
    }

    //图片裁剪
    static public function cut($getFile, $saveFile, $setWidth = 120, $setHeight = 120, $quality = 95){
        
        if(!file_exists($getFile))return false;//文件不存在
        list($getWidth,$getHeight,$getMime) = getimagesize($getFile);//大图信息

        switch ($getMime){//根据格式创建图像
            case 1://gif
                //return false;//<bug 不支持gif水印>
                $im = imagecreatefromgif($getFile);
                //$to_type = '.gif';
                break;
            case 2://jpg
                $im = imagecreatefromjpeg($getFile);
                //$to_type = '.jpg';
                break;
            case 3://png
                $im = imagecreatefrompng($getFile);
                //$to_type = '.png';
                break;
            default:return false;//出错
        }
        
        $imO = imagecreatetruecolor($setWidth,$setHeight);
        imagecopyresampled($imO,$im,0,0,0,0,$getWidth,$getHeight,$getWidth,$getHeight);// 结构：目标图|原图
        
        //存图像
        switch ($getMime){//根据格式创建图像
            case 1://gif
                imagegif ($imO,$saveFile,$quality);
                break;
            case 2://jpg
                imagejpeg ($imO,$saveFile,$quality);
                break;
            case 3://png
                imagejpeg ($imO,$saveFile,$quality);//<BUG>
                break;
        }
        imagedestroy($imO);//释放内存       
    }

    //图片等宽缩放
    static public function resizeWidth($getFile, $saveFile, $setWidth = 120, $quality = 95){//原图，保存，缩放比，质量，水印
    	
    	if(!file_exists($getFile))return false;//文件不存在
    	list($getWidth,$getHeight,$getMime) = getimagesize($getFile);//大图信息
		
        //不符合缩放条件return
        if($setWidth > $getWidth || $setWidth > $getHeight){
			@copy($getFile,$saveFile);
			return;
		}
        //

    	switch ($getMime){//根据格式创建图像
    		case 1://gif
    			//return false;//<bug 不支持gif水印>
	    		$im = imagecreatefromgif($getFile);
	    		//$to_type = '.gif';
	    		break;
    		case 2://jpg
	    		$im = imagecreatefromjpeg($getFile);
	    		//$to_type = '.jpg';
	    		break;
    		case 3://png
	    		$im = imagecreatefrompng($getFile);
	    		//$to_type = '.png';
	    		break;
    		default:return false;//出错
    	}
    	
    	//缩放 		    
		$N = $setWidth / $getWidth;//求缩放比率%
    	$to_height 	= $getHeight * $N;	    	
    	$to_width 	= $setWidth;  
		$imO = imagecreatetruecolor($to_width,$to_height);
	    imagecopyresampled($imO,$im,0,0,0,0,$to_width,$to_height,$getWidth,$getHeight);// 结构：目标图|原图

  	
		
    	//存图像
    	switch ($getMime){//根据格式创建图像
    		case 1://gif
	    		imagegif ($imO,$saveFile,$quality);
	    		break;
    		case 2://jpg
	    		imagejpeg ($imO,$saveFile,$quality);
	    		break;
    		case 3://png
	    		imagejpeg ($imO,$saveFile,$quality);//<BUG>
	    		break;
    	}
    	imagedestroy($imO);//释放内存    
    	
    }
}