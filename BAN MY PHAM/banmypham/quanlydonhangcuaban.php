<?php
if(!isset($_SESSION['username'])){
	?>
	<script>
	alert('Bạn không có quyền truy cập trang');
	window.location="index.php";
	</script>
	<?php
	
}
	
	require("dbconnect.inc");
	include("clspage.php");
	$paging = new Paging; $limit =10;
	// Tổng số mẫu tin 
	$paging->findTotal($link,'donhang'); 
	// Tổng số trang 
	$paging->findPages($limit); 
	// Bắt đầu từ mẫu tin 
	$start =$paging->rowStart($limit); 
	// Trang hiện tại 
	$curpage = ($start/$limit)+1;
	
	$sql="select a.*,b.tenhang,b.giatien,b.alias,c.hoten,c.dienthoai from donhang a,sanpham b,thanhvien c where a.sanpham=b.mahang and a. username=c.username and c.username='".$_SESSION['username']."' order by id desc limit ".$start.",".$limit;
	$result=mysqli_query($link,$sql);
?>
<table width="" border="1" background="">
	<h3 class="tbltitle">Quản lý đơn hàng</h3>
  <tr>
    <td width="20"><div align="left">STT</div></td>
    <td width=""><div align="left">Sản phẩm</div></td>
    <td width="60"><div align="left">Số lượng</div></td>
    <td width="75"><div align="left">Giá</div></td>
    <td width="70"><div align="left">Thành tiền</div></td>
    <td width="80"><div align="left">Ghi chú</div></td>
	<td width="100"><div align="left">Địa chỉ</div></td>
	<td width="20"><div align="left">Xóa</div></td>
  </tr>
<?php
$i=1;
while($rows=mysqli_fetch_array($result))
{
?>
  <tr>
    <td><div align="left"><?php echo $i;?></div></td>
    <td><div align="left"><?php echo $rows['sanpham'];?> - <a href="index.php?chitiet=<?php echo $rows['sanpham']; ?>&alias:<?php echo $rows['alias']; ?>"><?php echo $rows['tenhang']; ?></a></div></td>
    <td><?php echo $rows['soluong'];?></td>
    <td><div align="left"><?php echo $rows['giaban'];?>
	</div></td>
    <td><div align="left"><?php echo number_format($rows['giaban']*$rows['soluong']);?>đ
	</div></td>
	<td><div align="left"><?php echo $rows['ghichu'];?></div></td>
	<td><div align="left"><?php echo $rows['diachi'];?></div></td>
    <td><div align="left"><a href="index.php?action=110&del=<?php echo $rows['id'];?>">Xóa</a></div></td>
  </tr>
 <?php
 $i++;
 }
 ?>
</table>