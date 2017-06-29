<?php
namespace Common\Model;
use Think\Model;
/*
 * Basic基本设置
 */
class BasicModel extends Model{
    public function _construct(){

    }
    public function save($date=array()){
        if ($date){
            throw_exception('没有提交的数据');
        }
        $id = F('basic_web_config',$date);
        return $id;
    }

}