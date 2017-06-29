<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function index(){
        $admin=D('admin');
        if(IS_POST){
            if($admin->create($_POST,4)){
                if($admin->login()){
                    $this->success('登陆成功，跳转中...',U('Index/index'));
                }else{
                    $this->error('您的用户名或者密码错误！');
                }
            }else{
                $this->error($admin->getError());
            }
            return;
        }
        if(session('id')){
            $this->error('您已经登陆哦，不需要重复登陆！',U('Index/index'));
        }else{
            $this->display();
        }
    }

    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 20;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }
}
