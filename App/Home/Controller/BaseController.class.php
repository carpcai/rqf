<?php
namespace Home\Controller;
use Think\Controller\RestController;

class BaseController extends RestController {
    protected $allowType      = array('html','xml','json');
    protected $user;
    public function _initialize(){
        $user=session("user");
        if(empty($user)){
            //未登录,跳转到登录页
            redirect(U('/Home/Login/index'));
        }
        $user=M('user')->where(array('user_id'=>$user['user_id']))->find();
        $this->user=$user;
        $this->assign('user',$user);
    }

}