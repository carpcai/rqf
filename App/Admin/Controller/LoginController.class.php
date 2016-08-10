<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index()
    {
       $admin= session("admin");
       if(!empty($admin)){
           $url=U('/Admin/Index');
           redirect($url);
       }
       $this->display('login');
    }
    public function login()
    {
       $userName=I('username');
       $password=I('password');	
       $admin= M('admin')->where(array('username'=>$userName,
           'password'=>md5($password)))->find();
        if(count($admin)>0){
            session("admin",$userName);
            redirect(U('/Admin/Index'));
        }else{
            $this->error('登录失败');
        }

    }
    public function logout()
    {
        session("admin",null);
        $url= U('/Admin/Login/index');
        redirect($url);
    }
}