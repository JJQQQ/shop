<?php
namespace Home\Widget;
use Think\Controller;

class TypeWidget extends Controller{
    public function index(){
        $types = M('type');
        $type = $types -> order('sort ASC') -> where('state != 2') -> select();//��ȡ��Ʒ��ʾ�е�ȫ�����
        $typeList = getLayer($type);//��ȡ�����������
        $typeHosts = $types -> order('sort ASC') -> where('state = 3') -> select();//�õ��Ƽ�����
        //�Զ���(��ά)�������Ƽ�����,һά�±�Ϊ����ID����ά�±�Ϊid��name����ά�±�Ϊ��������
        foreach($typeHosts as $v){
            $typeHost[$v['pid']]['id'][] = $v['id'];
            $typeHost[$v['pid']]['name'][] = $v['name'];
        }
        $typeShow = $types -> order('sort ASC') -> where('state = 4 AND pid != 0') -> select();//�õ���ҳչʾС����
        $typeIndex = $types -> order('sort ASC') -> where('state = 4 AND pid = 0') -> select();//�õ���ҳչʾС����
        $brands = M('brands') -> field('id,logo,type_id') -> where('state = 1') -> select();
        //�����õ���ά����$brandList���±�1��ID��ֵΪƷ��ID�ţ��±�2��logo��ֵΪƷ��logoͼ
        foreach($type as $v){
            foreach($brands as $res){
                $index = strpos($res['type_id'], "{$v['id']}");
                if($index !== false){
                    $brandList[$v['id']]['id'][] = $res['id'];
                    $brandList[$v['id']]['logo'][] = $res['logo'];
                }
            }
        }
        
        $this -> assign('typeHost', $typeHost);
        $this -> assign('typeShow', $typeShow);
        $this -> assign('typeIndex', $typeIndex);
        $this -> assign('brands', $brandList);
        $this -> assign('types', $typeList);
        $this -> display('Public:type');
    }
}