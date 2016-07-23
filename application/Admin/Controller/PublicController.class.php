<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
		$this->display();
	}
	public function login(){
		$this->display();
	}
	public function dologin(){
		$this->display('500');
	}
	public function reg(){
		$this->display('reg1');
	}
	public function details(){
		$this->display();
	}
	public function index2(){
		$a=$this->get_path_info();
		print_r(2);
		print_r($a);die;
	}
}