<?php
namespace Home\Widget;
use think\Controller;
class CarWidget extends Controller{
	public function index(){
		//return $_SESSION('uid');
		//return $v = session('username');
	    //��session�л�ȡ�û��� id ,�����û�id,��ȡ�����ﳵ�е���Ʒ
		 $uid = session('uid');
		 $car = M('car');
		 $data = $car ->where("user_id={$uid}") -> select();
		//return dump($data);
		
	    //�������ȡ��ÿ����Ʒ��id ,�ڸ�����Ʒid������Ʒ���л�ȡ��Ʒ����ϸ��Ϣ
     	$goods = M('goods');
		foreach($data as $g){
			 $id = $g['id'];
			 $goods_id = $g['goods_id'];
			 $d[$id]['car_id'] = $g['id'];
			 $d[$id]['num'] = $g['num'];
			 $d[$id]['color'] = $g['num'];
			 $d[$id]['size'] = $g['num'];
			 $d[$id]['goods'] = $goods -> find($goods_id);
		}
		// return dump($d[$goods_id]);
		$this -> assign("goods",$d);
		return $this -> fetch("Public:car");
    }
	
	
	//==============================
		public function my_car(){
		
	    //��session�л�ȡ�û��� id ,�����û�id,��ȡ�����ﳵ�е���Ʒ
		 $uid = session('uid');
		 $car = M('car');
		 $attrvalue = M(attrvalue);
		 $data = $car ->where("user_id={$uid}") -> select();
		
		
	    //�������ȡ��ÿ����Ʒ��id ,�ڸ�����Ʒid������Ʒ���л�ȡ��Ʒ����ϸ��Ϣ
     	$goods = M('goods');
		foreach($data as $g){
			 $id = $g['id'];
			 $goods_id = $g['goods_id'];
			 $d[$id]['car_id'] = $g['id'];
			 $d[$id]['num'] = $g['num'];
		     $d[$id]['color'] = $g['color'];
			 
			 $color_data = $attrvalue -> find($g['color']);
			 $d[$id]['color'] = $color_data['attrvalue'];
			 
			 $size_data = $attrvalue -> find($g['size']);
			 $d[$id]['size'] = $size_data['attrvalue'];
			 
			 //$d[$id]['size'] = $g['size'];
			 $d[$id]['goods'] = $goods -> find($goods_id);
		}
	    //return dump($d);
		$this -> assign("goods",$d);
		return $this -> fetch("Public:my_car");
    }
	
	
	
	
	//==============���ﳵ��Ʒ����===================
	public function car_num(){
		$uid = session('uid');
	    $car = M('car');
	    $data = $car ->where("user_id={$uid}") -> select();
	   //�������ȡ��ÿ����Ʒ��id ,�ڸ�����Ʒid������Ʒ���л�ȡ��Ʒ����ϸ��Ϣ
     	$goods = M('goods');
		$num = 0;
		foreach($data as $g){
			$num += $g['num'];
		
		}
		 return $num;
	
		
	}
	//==============���ﳵ��Ʒ�ܼ۸�===================
	public function car_total(){
		$uid = session('uid');
		$car = M('car');
		$data = $car -> where("user_id={$uid}") -> select();
		$goods = M('goods');
		$total_price = 0;
		foreach($data as $g){
			//��Ʒid
			$goods_id = $g['goods_id'];
			//��Ʒ����
		    $num['goods_id'] = $g['num'];
		    $p['goods_id'] = $goods ->where("id={$goods_id}") -> find();
			//return dump($p['goods_id']);
			$price['goods_id'] = $p['goods_id']['saleprice'] * $num['goods_id'];
			$total_price += $price['goods_id'];
		}
		return $total_price ;
	}
	
}
