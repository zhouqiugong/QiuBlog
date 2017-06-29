<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {
    protected $_validate = array(
        array('catename','require','栏目名称不得为空！',1,'regex',3),
        array('catename','','栏目名称已经存在！',1,'unique',3),
    );
}
