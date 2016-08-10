<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
    	if(session('user'))
    	{
    		redirect('/Index/index');
    	}
    	$this->display();
    }
    public function login_query()
    {
    	$_User=M('User');
    	$data=I('post.');
    	$result=$_User->where(array('username'=>$data['username'],'password'=>md5($data['password'])))->find();
    	if($result){
            session('user',$result);
            $this->ajaxReturn(array('message'=>'登录成功','status'=>1,'identity'=>$result['identity']));
    	}
    	else
    		$this->ajaxReturn(array('message'=>'账号或密码错误','status'=>0));
    }
    public function logout()
    {
        session('user',null);
        redirect(U('/Login/index'));
    }
}