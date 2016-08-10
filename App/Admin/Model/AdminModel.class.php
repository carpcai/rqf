<?php

  namespace Admin\Model;
  use Think\Model;
  /**
   *  蔡立堉 2016/7/3
   */
  class AdminModel extends Model
  {

      protected $_validate =array(
          array ('username','require','用户名不得为空'),
          array ('password','require','密码不得为空'),
      );
      protected $_auto = array ( 
         array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
     );

  }

 ?>
