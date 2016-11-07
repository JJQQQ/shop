<?php
/**
 *  ��ѯ������
 *@param $table string ����
 *@param $where string��array ����
 *@param $table string �ֶ�
 *@return array ���ؽ����
 */

function getData($table, $where = '', $order = ''){
    $tables = M("{$table}");
    $data = $tables -> where($where) -> order("{$order}") -> select();
    return $data;
}

/**
 *  ���޷����б�
 *@param $types array ��������
 *@param $html string �Ӽ���������ַ���
 *@param $pid int ����id
 *@param $num int ����ַ�������
 *@return array �������������
 */
function getList($types, $html = '----', $pid = 0, $num = 0){
    $arr = array();
    foreach($types as $v){
        if($v['pid'] == $pid){
            //$v['num'] = $num + 1;//�����Զ��弶��ʹ��
            $v['html'] = str_repeat($html, $num);//����ַ�������
            $arr[] = $v;
            $arr = array_merge($arr, getList($types, $html, $v['id'], $num + 1));//�ݹ������ѹ�븸�������
        }
    }
    return $arr;
}

/**
 *  ���޷��༶������    ������Ϊ���������ֵ�Ķ�ά����
 *@param $types array ��������
 *@param $name string �Զ��������±�����
 *@param $pid int ����id
 *@return array ���ؼ������������(��ά����)
 */
function getLayer($types, $name = 'child', $pid = 0){
    $arr = array();
    foreach($types as $v){
        if($v['pid'] == $pid){
            $v[$name] = getLayer($types, $name, $v['id']);//�ݹ� ��������Ϊ����ֵѹ��������
            $arr[$v['id']] = $v;
        }
    }
    return $arr;
}

/**
 *  ��ȡ����ID    
 *@param $types array ��������
 *@param $pid int ����id
 *@return array ��������ID����(һά����)
 */
function getChildId($types, $pid = 0){
    $arr = array();
    foreach($types as $v){
        if($v['pid'] == $pid){
            $arr[] = $v['id'];
            $arr = array_merge($arr, getChildId($types, $v['id']));
        }
    }
    return $arr;
}

/**
 *  ��ȡǰ��ID (�ִ�)
 *@param $types array ��������
 *@param $id int ����id
 *@return string ����ǰ����ID�ַ���
 */
function getParentId($types, $id){
    $str = '';
    foreach($types as $v){
        if($v['id'] == $id){
            if($v['pid'] != 0){
                $str .= $v['pid'].",";
                $str .= getParentId($types, $v['pid']);
            }
        }
    }
    $str = trim($str, ',');
    return $str;
}


/**
 *  ��ȡǰ��ID   (ID��)
 *@param $types array ��������
 *@param $id int ����ID
 *@param $pid int Ҫ��ȡ����ĸ�ID
 *@return int ������ID
 */
function getTopId($types, $id, $pid = 0){
    $str = '';
    foreach($types as $v){
        if($v['pid'] != $pid){
            if($v['id'] == $id){
                $str = $v['pid'];
                $st = getTopId($types, $v['pid']);
                if($st){
                    $str = $st;
                }
            }
        }
    }
    return $str;
}
