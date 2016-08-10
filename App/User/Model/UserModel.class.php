<?php
namespace User\Model;
use Think\Model;
  class UserModel extends Model
  {
    protected $_validate =array(
        array ('username','require','用户名不得为空'),
        array ('password','require','密码不得为空'),
        array ('qq','require','qq不得为空'),
        array ('phone','require','手机号码不得为空'),
        array ('phone','11','手机号码必须为11位',3,'length'),
        array ('repassword','password','两次输入密码不相同',0,'confirm'), 
    );
    protected $_auto = array ( 
       array('password','md5',3,'function'),
     );


  }

 ?>
