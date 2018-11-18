
<?php 

mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY p_id limit 0,4 ";
$prd = mysql_query( $query_prd,$condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);


?><!-- ดึงข้อมูลสินค้าจากตาราง -->
<div class="well well-small">
	<h3>สินค้าล่าสุด </h3>
	<hr class="soften"/>
	<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
			<div class="carousel-inner">
				<div class="item">   <!-- ไอเทมชุดที่ 1 carousel -->

					<ul class="thumbnails">
						<?php if ($totalRows_prd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->
						<?php do {  ?>
							<li class="span3">
								<div class="thumbnail">
									<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> ดูข้อมูลสินค้า</a>
									<a href="#" class="tag"></a>
									<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>"><img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="bootstrap-ring"></a>
								</div>
							</li>
						<?php		 } while ($row_prd = mysql_fetch_assoc($prd)); 
					} mysql_free_result($prd); ?>
				</ul>
			</div>

			<?php 

			mysql_select_db($database_condb);
			$query_prdd = "SELECT * FROM tbl_product ORDER BY p_id limit 0,4 ";
			$prdd = mysql_query( $query_prdd,$condb) or die(mysql_error());
			$row_prdd = mysql_fetch_assoc($prdd);
			$totalRows_prdd = mysql_num_rows($prdd);


			?><!-- ดึงข้อมูลสินค้าจากตาราง -->
			<div class="item active">   <!-- ไอเทมชุดที่ 2 carousel -->
				<ul class="thumbnails">
					<?php if ($totalRows_prdd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->
					<?php do {  ?>
						<li class="span3">
							<div class="thumbnail">
								<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prdd['p_id'];?>" title="add to cart"><span class="icon-search"></span> ดูข้อมูลสินค้า</a>
								<a href="#" class="tag"></a>
								<a href="product_details.php?p_id=<?php echo $row_prdd['p_id'];?>"><img src="pimg/<?php echo $row_prdd['p_img1'];?>" alt="bootstrap-ring"></a>
							</div>
						</li>
					<?php		 } while ($row_prdd = mysql_fetch_assoc($prdd)); 
				} mysql_free_result($prdd); ?>
			</ul>
		</div>
	</div>
	<a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
	<a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
</div>
</div>



</div>