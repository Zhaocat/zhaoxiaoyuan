<?php 
header("content-type:text/html;charset=utf-8");
session_start();
include '../config/DB.class.php';
$aName=strtolower($_POST['aName']);
//用正则表达式校验一下
//目的：如果用户格式不正确，不用和数据库中数据对比，降低服务器压力
$aPwd=strtolower($_POST['aPwd']);
//echo $aName;
$sql="select * from admin where aName='{$aName}'";
//echo $sql;
//判断用户是否存在，根据查询记录数来判断，0没有该用户
//$counts=mysql_num_rows($db);
$counts=$db->numRows($sql);
//echo $counts;
if($counts>0){
	$rs=$db->fetchOne($sql);
	if($aPwd==$rs['aPwd']){
		//用户名和id放在session会话中 后面页面用到aName aId可以直接使用
		$_SESSION["aId"]=$rs["aId"];
		$_SESSION["aName"]=$rs["aName"];
		header("location:main.php");
	}else{
		echo "用户密码不正确，请重新输入<a href='index.php'>返回</a>";
	}
	//print_r($rs);
}
else{
	echo "账户不存在，请联系管理人员";
	exit;
}