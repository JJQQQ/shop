<?php
namespace Admin\Controller;
use Think\Controller;

class AclController extends Controller{
	//����Ȩ��ҳ��
	public function setAcl(){
		$this -> display();
	}
	
	//��Ȩ��������ӵ����ݿ�
	public function insert(){
		$auth_rule = M("auth_rule");
        //dump($_POST);
		foreach($_POST as $k => $v){
			$data['name'] = $k;
			$data['title'] = $v;
			//dump($data);
			//exit;
			if($auth_rule -> create($data)){
				$auth_rule -> add();
			}
		}
		$this -> redirect("acl/setAcl");
	}
}