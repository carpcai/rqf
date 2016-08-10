<?php
/**
 * 管理员后台模块
 */
namespace Admin\Controller;

use Common\Util\JsonRes;
use Think\Controller;
use Common\Service\SysConfiBiz;
use Common\Util\SendSms;
use Common\Util\WechatMessage;

class UserController extends BaseController
{
    public function index()
    {
        $admin=session('admin');
        //$where['team_id'] = (int)$admin['team_id'];
        $_User = M('user');
        $Array = $_User->where($where)->order('user_id desc')->select();

        //var_dump($admin);
        $this->assign('admin',$admin);
        $this->assign('Array', $Array);
        $this->display('list');
    }
    public function another()
    {
        $admin=session('admin');
        //$where['team_id'] = (int)$admin['team_id'];
        $_User = M('user');
        $Array = $_User->where($where)->select();

        //var_dump($admin);
        $this->assign('admin',$admin);
        $this->assign('Array', $Array);
        $this->display('another');
    }
    public function editUi()
    {
        $admin=session('admin');
        $_User = M('user');
        $where['user_id'] = I('get.user_id');

        $user = $_User->where($where)->find();
        if($user)
        {
            $this->assign('admin',$admin);
            $this->assign('user', $user);
            $this->display();
        }
        else
        {
            $this->error('非法操作');
        }
    }

    
    public function editQuery()
    {
        $admin=session('admin');
        $data=I('post.');
        $where["user_id"] = $data["user_id"];
        $_User = M('user');
        $user = $_User->where($where)->save($data);
        if($user){
            $this->success('修改成功',U('index'));
        }
        else{
            $this->error('非法操作');
        }
    }
}