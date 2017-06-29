<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
        $article = D('article');
        $count = $article->where(array('cateid'=>I('id')))->count();
        $Page = new \Think\Page($count,12);
        $show = $Page->show();
        $list = $article->where(array('cateid'=>I('id')))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->current();
        $this->display();
    }

    public function current(){
        $current=I('id');
        $this->assign('current',$current);
    }
}
