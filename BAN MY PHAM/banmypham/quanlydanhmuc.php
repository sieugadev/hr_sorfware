<?php
if(!isset($_SESSION['loginadmin'])){
	?>
	<script>
	alert('Bạn không có quyền truy cập trang');
	window.location="index.php";
	</script>
	<?php
	
}
	
	require("dbconnect.inc");
	include("clspage.php");
	$paging = new Paging;
	$limit =10;
	// Tổng số mẫu tin 
	$paging->findTotal($link,'loaisp'); 
	// Tổng số trang 
	$paging->findPages($limit); 
	// Bắt đầu từ mẫu tin 
	$start =$paging->rowStart($limit); 
	// Trang hiện tại 
	$curpage = ($start/$limit)+1;
	
	$sql="select * from loaisp order by maloai desc limit ".$start.",".$limit;
	$result=mysql_query($sql);
?>
<table width="" border="1" background="">
	<h3 class="tbltitle">Quản lý Danh Mục</h3>
	<input name="Smsua" type="button" onclick="window.location='themdanhmuc.html';" class="button-red muatiep" value="Thêm mới danh mục" />
  <tr>
    <td width="20"><div align="left">STT</div></td>
    <td width=""><div align="left">Danh Mục</div></td>
	<td width="20"><div align="left">Sửa</div></td>
	<td width="20"><div align="left">Xóa</div></td>
  </tr>
<?php
$i=1;
while($rows=mysql_fetch_array($result))
{
?>
  <tr>
    <td><div align="left"><?php echo $i;?></div></td>
    <td><div align="left"><?php echo $rows['maloai'];?> - <a href="danhmuc-<?php echo $rows['maloai']; ?>.html"><?php echo $rows['ten']; ?></a></div></td>
    <td><div align="left"><a href="sua-danhmuc-<?php echo $rows['maloai'];?>.html">Sửa</a></div></td>
	<td><div align="left"><a href="index.php?xoadanhmuc=<?php echo $rows['maloai'];?>">Xóa</a></div></td>
  </tr>
 <?php
 $i++;
 }
 ?>
 <td colspan="3">
 <?php 
	echo $paging->pagesList($curpage);
 ?>
 </td>
</table>