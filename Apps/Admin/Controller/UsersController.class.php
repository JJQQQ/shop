<?php
namespace   Admin\Controller;
use Think\Controller;
use Think\Area;
class UsersController extends PublicController{
    public function index(){
		$username = $_GET['username'];
		$state = $_GET['state'];
		if($state == 1 || $state == 2){
			$map['state'] = array('EQ',$state);
			$args['state'] = $state;
		}
		$map['username'] = array('LIKE',"%{$username}%");
		$users = M("users");
        $total = $users -> where($map) -> count();//��ѯ����������
        $args['username'] = $username;
		$Page = new \Think\Page($total,5,$args);//ʵ������ҳ��
        $show = $Page -> show();//��ҳ��ʾ���
		$list = $users ->where($map) -> order('id') -> limit($Page->firstRow.','.$Page->listRows) -> select();
        $this -> assign("users",$list);
        $this -> assign("page",$show);
        $this -> assign("search",$username);
		$this -> display();
    }
    
   //��ȡ�޸���Ϣҳ��
    public function edit(){
        $id = I('id');
		$user = M("users");
		$data = $user -> find($id);
		$arr = explode("#",$data['address']);
		$a = array($arr[0],$arr[1],$arr[2]);
		$city = Area::city($a);
		$data['address'] = $arr[3];
		$this -> assign("city",$city);
        $this -> assign("user",$data);
        $this -> display();
    }
    
	//���޸ĵĻ�Ա��Ϣ��ӵ����ݿ�
	public function update(){
        $rule = array(
			array('username','require','�û�������Ϊ��'),
			array('password','password2','ȷ�����벻��ȷ��',0,'confirm'),
			array('password','6,20','���볤�Ȳ���ȷ��',0,'length'),
			array('email','email','�����ʽ����ȷ��'),
		
		);	
	
	    $users = M('users');
		$_POST['address'] = $_POST['province']."#".$_POST['city']."#".$_POST['county']."#".$_POST['address'];
	    $_POST['birthday'] = $_POST['year']."#".$_POST['month']."#".$_POST['day'];
	    if($users ->validate($rule) -> create()){
			if($users -> save()){
				$this -> redirect("Users/index");
			}else{
				$this -> redirect("users/edit");
			}
		}else{
			$this -> error($users -> getError());
		}
    }
	
	//��ȡ���ҳ��
	public function add(){
        $city = Area::city();
		$this -> assign("city",$city);
		$this -> display();
    }
    
	//��ӵ����ݿ�
	public function insert(){
        /*
		$rule = array(
			array('username','require','�û�������Ϊ��'),
			array('password2','password','ȷ�����벻��ȷ��',0,'confirm'),
			array('password','6,20','���볤�Ȳ���ȷ��',0,'length'),
			array('email','email','�����ʽ����ȷ��'),
		
		);	
		*/
		$_POST['password'] = md5($_POST['password']);
		$_POST['addtime'] = time();
        $_POST['registerip'] = $_SERVER['REMODE_ADDR'];//ע��ip
	    $_POST['address'] = $_POST['province']."#".$_POST['city']."#".$_POST['county']."#".$_POST['address'];
	    $_POST['birthday'] = $_POST['year']."#".$_POST['month']."#".$_POST['day'];
		unset($_POST['password2']);
		$users = M('users');
		if($users ->validate($rule) -> create()){
			if($users -> add()){
				$this -> redirect("users/index");
			}else{
				$this -> redirect("users/add");
			}
		}else{
				$this -> error($users -> getError());
			}
	    }
    
	public function del(){
		$id = I('id');
		$users = M('users');
		if($users -> delete($id)){
			$this -> redirect("users/index");
		}else{
			$this -> redirect("users/index}");
		}
    }
}