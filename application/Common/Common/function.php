<?php
/*
 * 添加图片
 */
	function add_image($controller,$thumb=0,$width=150,$height=150){
		$baseDir = './Uploads/';
		$attachDir = $controller.'/';
		$path = $baseDir.$attachDir;
        if (!file_exists($path,0777)){
            mkdir($path); 
        }
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     $baseDir; // 设置附件上传根目录
	    $upload->savePath  =     $attachDir; // 设置附件上传（子）目录
	   
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	    	return $upload->getError();
	    }else{// 上传成功
	    	$status = '';
	        foreach($info as $file){
	        	$image = new \Think\Image(); 
				$image->open($baseDir.$file['savepath'].$file['savename']);
				// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
				$image->thumb(150, 150)->save($baseDir.$file['savepath'].'thumb_'.$file['savename']);
		        //echo $file['savepath'].$file['savename'];
				$data['img'] = $file['savepath'].$file['savename'];
				$data['controller'] = $controller;
				//$data['thumb'] = 
				if($status == ''){
					$status .= M('image')->add($data);
				}else{
					$status .= ','.M('image')->add($data);
				}
		    }
			if($status){
				return $status;
			}else{
				return false;
			}
	    }
	}
/*
 * 查看图片
 */	
	function get_image($id){
		$list = M('image')->where(array('id'=>$id))->find();
		return $list['img'];
	}
	/*
 * 加密
 */	
	function encryption($str){
		$str = md5(md5($str.'Warren'));
		return $str;
	}
