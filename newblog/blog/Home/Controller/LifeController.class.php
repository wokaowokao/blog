<?php
namespace Home\Controller;
use Think\Controller;
class LifeController extends Controller {
	public function index(){
        if (session('name')) {
            $this->assign('name', session('name'));
        } else {
            $this->assign('name', '');
        }
        $articles = D('Home/Article');
        $arr = $articles->getarticles('5');
		$hotArticle = A('Base')->getHotArticle();
		$this->assign('hotArticle',$hotArticle);
		$this->assign('articleList', $arr[0]);
        $this->assign('pageshow', $arr[1]);
		$remoteInfo = A('Base')->getRemoteInfo();
		$this->assign('remoteInfo',$remoteInfo);
        $this->display();
	}

}