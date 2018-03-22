<?php
include '../config/DB.class.php'; 
//部门数据处理页面
//增加部门 删除部门 修改部门

$action = $_GET["action"];
//$dId=$_GET["dId"];
if($action=="insert"){
//print_r($_POST);
$dName		=$_POST["dName"];
$dMan		=$_POST["dMan"];
$dManTel	=$_POST["dManTel"];
$dInfo		=$_POST["dInfo"];
$sql="insert into dept(dName,dInfo,dMan,dManTel)";
$sql.="values('{$dName}','{$dInfo}','{$dMan}','{$dManTel}')";
$db->query($sql);
}else if($action=="delete"){
//echo "删除部门";
$dId=$_GET["dId"];
$sql="delete from dept where dId={$dId}";
//echo $sql;
$db->query($sql);
}else if($action=="update"){
//echo "修改操作";
$dId=$_GET["dId"];
	$dName		=$_POST["dName"];
	$dMan		=$_POST["dMan"];
	$dManTel	=$_POST["dManTel"];
	$dInfo		=$_POST["dInfo"];
	$sql="update dept set dName='{$dName}',dMan='{$dMan}',dManTel='{$dManTel}',dInfo='{$dInfo}'where dId={$dId}";
$db->query($sql);
//
}
?>
<script type ="text/javascript">
alert("操作成功");
window.location="deptList.php";
</script>