<?php 


mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY rand() limit 0,3"; //แสดงสินค้าแนะนำโดยการแรนดอม
$prd = mysql_query( $query_prd,$condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);


 ?>

<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="products.php" title="View more">VIew More<span class="icon-plus"></span></a> สินค้าแนะนำ  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			
						<?php if ($totalRows_prd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->

						<?php 
						
						do { //วนลูปแสดงสินค้า

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
						
				} while ($row_prd = mysql_fetch_assoc($prd)); ?>
			<?php } mysql_free_result($prd); ?>

		  </ul>	
	</div>
	</div>