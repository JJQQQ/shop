<?php
namespace Home\Widget;
use Think\Controller;
class MyJDWidget extends Controller{
	public function index(){
		//ȫ��������δ��ɶ���������ɶ���
	    $user_id = session('uid');
		$orders = M('orders');
		$detail = M('detail');
		$order_data = $orders -> where("user_id={$user_id}") -> select();
		$order_count_all = $orders -> where("user_id={$user_id}") -> count();//===========�õ�ȫ��������================
		$order_count_n = 0; //δ��ɵĶ���
		$order_count_y = 0; //����ɵĶ���
		
		//===����һ���������������Ϊ���۵�����====
		$review_count = 0;//δ����
		
		//�����ĸ�����������ۺ�������ݣ�
		$after_count_all = 0; //�����ۺ���Ʒ
		$after_count_t = 0;   //�˻���Ʒ
		$after_count_h = 0;   //������Ʒ
		$after_count_b = 0;   //������Ʒ
		
		foreach($order_data as $order_d){
			//��ȡ��������id,�鿴�����Ƿ������
			$order_id = $order_d['id'];
			$detail_data = $detail -> where("order_id={$order_id}") -> select();
			foreach($detail_data as $detail_d){
				//��������
				if($detail_d['state'] < 4){
					$order_count_n ++;
				}else if($detail_d['state']==4){
					$order_count_y ++;//δ��ɵĶ�����һ
				}else if($detail_d['state']==5 || $detail_d['state']==6){
					$after_count_t ++; //�˻���һ
					$after_count_all ++ ;//�����ۺ��һ
					$order_count_y ++;//δ��ɵĶ�����һ
				}else if($detail_d['state']==7 || $detail_d['state']==8){
					$after_count_h ++; //������һ
					$after_count_all ++ ;//�����ۺ��һ
					$order_count_y ++;//δ��ɵĶ�����һ
				}else if($detail_d['state']==9 || $detail_d['state']==10){
					$after_count_b ++; //���޼�һ
					$after_count_all ++ ;//�����ۺ��һ
					$order_count_y ++;//δ��ɵĶ�����һ
				}
				
			    //������δ��������
				if($detail_d['isreview']==1){
					$review_count ++;
				}
			}
			
		}
		
		$order_count['all'] = $order_count_all;
		$order_count['n'] = $order_count_n;
		$order_count['y'] = $order_count_y;
		
		//ȫ���ۺ��˻�������������
		$after_count['all'] = $after_count_all;
		$after_count['t'] = $after_count_t;
		$after_count['h'] = $after_count_h;
		$after_count['b'] = $after_count_b;
		
		
		
		
		
		
		$this -> assign('after_count',$after_count);//����������
		$this -> assign('review_count',$review_count);//����������
		$this -> assign('order_count',$order_count);//=====��������=====
		$this -> display('Public:MyJD');
	}
}