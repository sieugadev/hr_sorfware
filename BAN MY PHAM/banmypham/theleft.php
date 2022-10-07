<?php 
require("dbconnect.inc");
$sql= "select * from loaisp";
$result= mysqli_query($link,$sql);
?>
<div class="leftwapper">
<h2><a href="/">Danh Mục Sản Phẩm</a></h2>
<ul class="menu_cate">
<?php
	while($rows=mysqli_fetch_array($result))
	{
?>
	<li>
		<a href="?ml=<?php echo $rows['maloai'];?>"><?php echo $rows['ten'];?></a>		
	</li>
<?php
	}
?>
</ul>
<div class="ads">
</div>
</div>

