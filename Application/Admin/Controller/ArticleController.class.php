<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {

    public function lst(){
        $article=D('ArticleView');
        $count= $article->count();
        $Page= new \Think\Page($count,2);
        $show= $Page->show();
        $list = $article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function add(){
        $article=D('article');
        if(IS_POST){
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
            $data['cateid']=I('cateid');
            $data['time']=time();
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();
                $upload->maxSize   =     3145728 ;
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
                $upload->savePath  =      './Uploads/';
                $upload->rootPath  =      './';
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info) {
                    $this->error($upload->getError());
                }else{
                    $data['pic']=$info['savepath'].$info['savename'];
                }
            }

            if($article->create($data)){
                if($article->add()){
                    $this->success('添加文章成功！',U('lst'));
                }else{
                    $this->error('添加文章失败！');
                }
            }else{
                $this->error($article->getError());
            }
            return;
        }
        $cateres=D('cate')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }

    public function edit(){
        $article=D('article');
        if(IS_POST){
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
            $data['cateid']=I('cateid');
            $data['id']=I('id');
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();
                $upload->maxSize   =     3145728 ;
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
                $upload->savePath  =      './Uploads/';
                $upload->rootPath  =      './';
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info) {
                    $this->error($upload->getError());
                }else{
                    $data['pic']=$info['savepath'].$info['savename'];
                }
            }

            if($article->create($data)){
                $save=$article->save();
                if($save !== false){
                    $this->success('修改文章成功！',U('lst'));
                }else{
                    $this->error('修改文章失败！');
                }
            }else{
                $this->error($article->getError());
            }
            return;
        }
        $articles=$article->find(I('id'));
        $this->assign('articles',$articles);
        $cateres=D('cate')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }

    public function del(){
        $article=D('article');
        if($article->delete(I('id'))){
            $this->success('删除文章成功！',U('lst'));
        }else{
            $this->error('删除文章成功！');
        }
    }


}
