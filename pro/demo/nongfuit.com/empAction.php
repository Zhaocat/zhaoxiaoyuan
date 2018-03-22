<?php
//部门数据的处理页面：增加部门  删除部门 修改部门
include "../config/DB.class.php" ;
include"../config/upload.class.php";
$db->query("set names utf8");
$action=$_GET["action"];
if($action=="insert"){
	$action=$_GET["action"];
	$eImg=$_FILES["eImg"];//接收图片，接到的是一个数组
	$upImg=new upload($eImg);
	$filePath=$upImg->main();
	$eName=$_POST["eName"];
	$eSex=$_POST["eSex"];
	$eEdu=$_POST["eEdu"];
	$eTec=$_POST["eTec"];
	$eExp=$_POST["eExp"];
	$dId=$_POST["dId"];
	$sql="insert into emp(eName,eImg,eSex,eEdu,eTec,eExp,dId)";
	$sql.="values('{$eName}','{$filePath}','{$eSex}','{$eEdu}','{$eTec}','{$eExp}','{$dId}')";
	$db->query($sql);
}elseif($action=="delete"){
	//有图片的，要先删除图片再删除记录
	$eId=$_GET["eId"];
	$sql_1="select eImg from emp where eId={$eId}";
	$rs=$db->fetchOne($sql);
	//要判断是否有文件
	if(is_file($rs["eImg"])){
		unlink($rs["eImg"]);
	}
	$sql="delete from emp where eId={$eId}";
	$db->query($sql_1);
}elseif($action=="update"){
	echo "update";
}
?>
 <script type ="text/javascript">
alert("操作成功");
window.location="empList.php";
</script>