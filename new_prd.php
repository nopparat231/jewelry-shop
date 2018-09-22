
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
			<div class="item active">   <!-- ไอเทมชุดที่ 1 carousel -->

			  <ul class="thumbnails">
			  	<?php if ($totalRows_prd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->
<?php do {  ?>
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
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
$query_prdd = "SELECT * FROM tbl_product ORDER BY p_id limit 4,8 ";
$prdd = mysql_query( $query_prdd,$condb) or die(mysql_error());
$row_prdd = mysql_fetch_assoc($prdd);
$totalRows_prdd = mysql_num_rows($prdd);


 ?><!-- ดึงข้อมูลสินค้าจากตาราง -->
		   <div class="item">   <!-- ไอเทมชุดที่ 2 carousel -->
		  <ul class="thumbnails">
			<?php if ($totalRows_prdd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->
<?php do {  ?>
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prdd['p_id'];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
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

		  <?php 

mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY p_id limit 0,3 ";
$prd = mysql_query( $query_prd,$condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);


 ?><!-- ดึงข้อมูลสินค้าจากตาราง -->  <!-- สินค้าด้านล่าง carousel -->
 		<div class="row-fluid">
		  <ul class="thumbnails">
			
						<?php if ($totalRows_prd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->

						<?php 
						$n = 1;
						do { //วนลูปแสดงสินค้า

						if($n % 3 == 1){ //ตรวจสอบว่าแสดงสินค้าไปแล้วกี่ชิ้น ถ้าแสดงถึงสามชิเนแล้ว ให้แสดง class="row-fluid" 
						echo '<div class="row-fluid">';
					}
					?>

					<li class="span4">
						<div class="thumbnail">
							<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" class="overlay"></a>
							<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
							<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>"><img src="pimg/<?php echo $row_prd['p_img1'];?>" alt=""></a>
							<div class="caption cntr">
								<p><?php echo $row_prd['p_name']; ?></p>
								<p><strong><?php echo number_format($row_prd['p_price']); ?> บาท</strong></p>
								<h4><a class="shopBtn" href="cart.php" title="add to cart"> Add to cart </a></h4>
								<div class="actionList">
									<a class="pull-left" href="#">Add to Wish List </a> 
									<a class="pull-left" href="#"> Add to Compare </a>
								</div> 
								<br class="clr">
							</div>
						</div>
					</li>

					<?php
						if($n % 3 == 0){ //ตรวจสอบว่าแสดงสินค้าไปแล้วกี่ชิ้น ถ้าแสดงถึงสามชิเนแล้ว ให้แสดง class="row-fluid" 
						echo '</div><br />';
					}
					$n += 1;

				} while ($row_prd = mysql_fetch_assoc($prd)); ?>
			<?php } mysql_free_result($prd); ?>


		  </ul>
		</div>
	</div>