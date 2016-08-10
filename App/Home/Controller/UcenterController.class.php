<?php
namespace Home\Controller;
use Think\Controller;
class UcenterController extends Controller {
    public function index(){
        if(!session('user'))
        {
            redirect('/Index/index');
        }
        $this->assign('user',session('user'));
        $this->display('index');
    }
}