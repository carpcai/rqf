<?php
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->assign('user',session('user'));
        $this->display('index');
    }
}