<?php 
	session_start();
	include("dbconnect.inc");
	$m=$_POST['maloai'];
	$n=$_POST['txtname'];
	
	$sql="UPDATE loaisp SET ten='$n' WHERE maloai='$m'";
	$result=mysql_query($sql,$link);
	if($result)
	{	
		$_SESSION['mess']="Cập nhật thành công";
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}
	else
	{
		$_SESSION['mess']="Lỗi Câp nhật Danh mục";
		header('Location:'.$_SERVER['HTTP_REFERER']);		
	}
?>
