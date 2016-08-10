<?php
function get_prefecture_name($id){
    if($id==-1){
        return "所有专区";
    }
	$arr=M('prefecture')->field('name')->cache(true,3600)->where(array('id'=>$id))->find();
	return $arr['name'];
}
function get_area_fullName($id){
	$arr=M('areas')->field('joinname')->cache(true,3600)->where(array('area_id'=>$id))->find();
	return $arr['joinname'];

}
function get_financing_status($id){
	$arr=array('未融资','融资中','融资完成');
	return $arr[$id-1];

}
function get_business_name($id){
    if(!$id){
        return '所有类型';
    }
	$arr=M('Business')->field('business_name')->cache(true,3600)->where(array('business_id'=>$id))->find();
	return $arr['business_name'];
}
function get_status($id){
    $arr=array('未完成','已完成');
    return $arr[$id];
}