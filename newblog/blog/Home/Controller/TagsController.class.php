<?php
namespace Home\Controller;
use Think\Controller;
class TagsController extends Controller {
	public function index(){
		if (session('name')) {
            $this->assign('name', session('name'));
        } else {
            $this->assign('name', '');
        }
		$remoteInfo = A('Base')->getRemoteInfo();
		$this->assign('remoteInfo',$remoteInfo);
		$this->display();
	}
}