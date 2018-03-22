<?php 
include 'inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>无标题文档</title>
</head>
<style type=text/css>
BODY {
	BACKGROUND: #799ae1; MARGIN: 0px; FONT: 9pt 宋体
}
table {
	BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
td {
	FONT: 12px 宋体
}
IMG {
	BORDER-RIGHT: 0px; BORDER-TOP: 0px; VERTICAL-ALIGN: bottom; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
A {
	FONT: 12px 宋体; COLOR: #000000; TEXT-DECORATION: none
}
A:hover {
	COLOR: #428eff; TEXT-DECORATION: underline
}
.sec_menu {
	BORDER-RIGHT: white 1px solid; BACKGROUND: #d6dff7; OVERFLOW: hidden; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid
}
.menu_title {
	
}
.menu_title SPAN {
	FONT-WEIGHT: bold; LEFT: 7px; COLOR: #215dc6; POSITION: relative; TOP: 2px
}
.menu_title2 {
	
}
.menu_title2 SPAN {
	FONT-WEIGHT: bold; LEFT: 8px; COLOR: #428eff; POSITION: relative; TOP: 2px
}
</style>
<body leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<table cellSpacing=0 cellPadding=0 width="100%" align=left border=0>
  </table>

  <tr>
    <td vAlign=top bgColor=#799ae1>
      <table cellSpacing=0 cellPadding=0 width=158 align=center>
 
        <tbody>
        <tr>
          <td vAlign=bottom height=42><img height=38 src="../left.files/title.gif" width=158> 
            </td>
            </tr>
            </tbody>
            </table>
            </tr>
      <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title onMouseOver="this.className='menu_title2';" 
          onmouseout="this.className='menu_title';" background=""  height=25>
            <SPAN style="color: #ffffff">

			<?php echo $_SESSION["aName"]?>登录| 
			<A href="exits.php" target=_parent><B>退出</B>
			</A>
			</SPAN>
			</td>
      
        <tr>
          <td class=menu_title onMouseOver="this.className='menu_title2';" 
          onmouseout="this.className='menu_title';" background=""  height=25 > &nbsp;
            </td>
</tr>
        </tbody></table>
        
	  <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>部门管理</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>部门添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
	  

       <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>员工管理</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="empAdd.php" target=mainFrame>员工添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="empList.php" target=mainFrame>员工列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
         
          <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>人力资源规划</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>部门添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
         <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>招聘与配置</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>部门添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
         <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>培训与开发</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>部门添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
   <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>绩效管理</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>薪酬福利管理</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
   <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>薪酬福利管理</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>部门添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
   <table cellSpacing=0 cellPadding=0 width=158 align=center>
        <tbody>
        <tr>
          <td class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';"  background="../left.files/admin_left_1.gif"  height=25><span><B>员工关系管理</B></span></td>
        </tr>
        <tr>
          <td id=submenu0>
            <div class=sec_menu style="WIDTH: 158px ">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20><A href="deptAdd.php" target=mainFrame>部门添加</A></td>
              </tr>
               <tr>
                <td height=20>
                <A  href="deptList.php" target=mainFrame>部门列表</A></td>
              </tr>
              </tbody></table>
            </div>
            <div style="WIDTH: 158px">
            <table cellSpacing=0 cellPadding=0 width=135 align=center>
              <tbody>
              <tr>
                <td height=20></td></tr></tbody></table></div></td></tr></tbody></table>
   
         
            </TR>
            </TBODY>
            </table>
           
				  </BODY>
				  </HTML>
