<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->display();
	}
	public function login(){
		$this->display();
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
	function get_path_info(){
	     // 根据你的环境兼容获取PATH_INFO 具体代码略
	     return $path; // 直接返回获取到的PATH_INFO信息
	}
}