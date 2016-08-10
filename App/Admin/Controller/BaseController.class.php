<?php
namespace Admin\Controller;
use Think\Controller\RestController;

class BaseController extends RestController {
    protected $allowType      = array('html','xml','json');
    public function _initialize(){
        $adminName=session("admin");
        if(empty($adminName)){
            //未登录,跳转到登录页
            redirect(U('/Admin/Login/index'));
        }
    }

}