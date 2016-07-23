<?php
// 本类由系统自动生成，仅供测试用途
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$limit = $_GET['limits'] ? intval($_GET['limits']) : 20;
        $page = $_GET['pages'] ? intval($_GET['pages']) : 1;
        $limit = ($page-1) * $limit . ', ' . $limit;
		$list = M('diary')->limit($limit)->order('ctime desc')->select();
		if($list){
			foreach($list as $v=>$key){
				$list[$key]['ctime'] = date('Y-m-d H:i',$v['ctime']);
			}
			$count = count($list) < $limit ? 1 : 0;

			$this->ajaxReturn(array('status'=>1,'list'=>$list,'count'=>$count));
		}else{
			$this->ajaxReturn(array('status'=>0,'message'=>'服务器错误!'));
		}
	}
	public function detail(){
		$list = M('diary')->where(array('id'=>$_GET['id']))->find();
		if($list){
			$list['ctime'] = date('Y-m-d H:i',$v['ctime']);
			$this->ajaxReturn(array('status'=>1,'list'=>$list));
		}else{
			$this->ajaxReturn(array('status'=>0,'message'=>'服务器错误!'));
		}
	}
	public function add(){
		$data['title'] = $_GET['title'];
		$data['content'] = $_GET['content'];
		$data['ctime'] = time();
		$list = M('diary')->add($data);
		if($list){
			$this->ajaxReturn(array('status'=>1,'message'=>'发布成功'));
		}else{
			$this->ajaxReturn(array('status'=>0,'message'=>'发布失败，请重试!'));
		}
	}
}