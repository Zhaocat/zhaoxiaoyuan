<?php 

session_start();
session_destroy();

//header("location:index.php");
?>
<script type="text/javascript">
alert("退出成功！");
window.location="index.php";
</script>