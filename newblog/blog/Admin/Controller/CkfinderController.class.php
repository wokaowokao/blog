<?php
namespace Admin\Controller;
use Think\Controller;
class CkfinderController extends Controller {

	public function upload(){
		$action = I('get.action');
		if($action == 'uploadImg'){
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =    'Uploads/images/'; // 设置附件上传根目录
		    $upload->savePath  =     ''; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();
		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
				echo $info['savepath'].$info['savename'];
		        //$this->success('上传成功！');
		    }		
		}
	}
	
}