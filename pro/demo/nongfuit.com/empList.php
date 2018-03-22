<?php 
include '../config/DB.class.php';

//print_r($rows);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>无标题文档</title>
 <link rel="stylesheet" href="inc/css.css" type="text/css" />
</head>
<body>
  
    <table width="1052" border="0" align="center" cellpadding="2" cellspacing="1" bordercolor="#799AE1"
        class="tableBorder">
        <tbody>
            <tr>
                <th align="center" colspan="16" style="height: 23px">
                   员工列表
                </th>
            </tr>
            <tr bgcolor="#DEE5FA">
                <td colspan="16" align="center" class="txlrow">
                    &nbsp;
                </td>
            </tr>
            <tr align="center" bgcolor="#799AE1">
            <td align="center" class="txlHeaderBackgroundAlternate">
         员工姓名
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                    性别
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                    学历
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                   照片
                </td>
                  <td align="center" class="txlHeaderBackgroundAlternate">
                   掌握技能
                </td>
                  <td align="center" class="txlHeaderBackgroundAlternate">
                   工作经验
                </td>
                  <td align="center" class="txlHeaderBackgroundAlternate">
                   所属部门
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                   操作
                </td>
            </tr>
             <?php 
       $sql="select * from emp";
       $count=$db->numRows($sql);
       $pageSize=2;
       $totalPage=ceil($count/$pageSize);
       //echo $totalPage;
      //if($_GET["page"]){
       	//$page=$_GET["page"];
       	if(isset($_GET["page"])){
			$page=$_GET["page"];
       	if($page>$totalPage){
       		$page=$totalPage;
       	}
       }else{
       	$page=1;
       }
      //echo $page;
       $start=($page-1)*$pageSize;
       $sql_1="select * from emp limit $start,$pageSize";
       
       $rows=$db->fetchAll($sql_1);
       ?>
            <?php 
           //$sql="select * from emp";
           $sql="select e.eId,e.eName, e.eSex,e.eEdu,e.eImg,e.eTec,e.eExp,d.dName from emp as e";
		   $sql.="left join dept as d on e.dId=d.dId";
		  // echo $sql;
		  
           $rs=$db->fetchAll($sql);
           // print_r($rs);
            foreach ($rs as $key=>$val){
            	if($val["eSex"]=="1"){
            		$eSex="男";
            	}else {
            		$eSex="女";
            	}
            ?>
            
         
            
            <tr align="center" bgcolor="#799AE1">
                <td align="center" class="txlHeaderBackgroundAlternate">
                    <?php echo $val["eName"]?>
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                    <?php echo $val["eSex"]?>
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                   <?php echo $val["eEdu"]?>
                </td>
                <td align="center" class="txlHeaderBackgroundAlternate">
                   <img src="<?php echo $val["eImg"]?>" width="60" height="40">
                </td>
                  <td align="center" class="txlHeaderBackgroundAlternate">
                   <?php echo $val["eTec"]?>
                </td>
                  <td align="center" class="txlHeaderBackgroundAlternate">
                   <?php echo $val["eExp"]?>
                </td>
                  <td align="center" class="txlHeaderBackgroundAlternate">
                   <?php echo $val["dName"]?>
                </td>
<td align="center" class="txlHeaderBackgroundAlternate">
               <a href="empAction.php?eId=<?php echo $val["eId"]?>& action=delete">删除</a>
               |
               <a href="empUpdate.php?eId=<?php echo $val["eId"]?>">修改 </a>  
                </td>
            </tr>
            <?php 
            }
            ?>
            <tr bgcolor="#DEE5FA">
                <td colspan="16" align="center" bgcolor="#DEE5FA" class="txlrow">
                   <a href="empList.php?page=1"> 首页</a>
                 |
                 <a href="empList.php?page=<?php echo $page-1;?>">上一页</a>
                 |
                 <?php 
                if($page<=5){
                	for($i=1;$i<=10;$i++){
if($i==$totalPage){
	echo "<a href='empList.php?page={$i}'>[".$i."]</a>";
	break;
}
                		echo "<a href='empList.php?page={$i}'>[".$i."]</a>";
                	}
                }else{
                	for($i=$page-4;$i<=$page+5;$i++){
	if($i==$totalPage){
		echo "<a href='empList.php?page={$i}'>[".$i."]</a>";
		break;
}
echo "<a href='empList.php?page={$i}'>[".$i."]</a>";
}
				
                }
                ?>
                 |
                 <a href="empList.php?page=<?php echo $page+1;?>">下一页</a>
                 |
                <a href="empList.php?page=<?php echo $totalPage;?>"> 尾页</a>    
                </td>
            </tr>
            <tr bgcolor="#DEE5FA">
                <td colspan="16" align="center" class="txlrow">
                </td>
            </tr>
            </tbody>
            </table>
            
</body>
</html>

