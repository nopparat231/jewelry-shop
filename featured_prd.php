<?php 


mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY rand() limit 0,9"; //แสดงสินค้าแนะนำโดยการแรนดอม
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
							<?php 
							$qty = $row_prd['p_qty'];
							if($qty <= 0){ ?>

								<div class="caption cntr" >
									<p><?php echo $row_prd['p_name']; ?></p>
									<p><strong><?php echo number_format($row_prd['p_price'],2); ?> บาท</strong></p>
									<h4><a class="shopBtn" href="cart.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" dissable title="add to cart"> สินค้าหมด </a></h4>
									 
									<br class="clr">
								</div>


								<p dissable class="button btn2" >
									<font color="#CC7E6D" > <span class="glyphicon glyphicon-shopping-cart" ></span>สินค้าหมด</font></p>


								<?php }else{
									?>


									<div class="caption cntr">
										<p><?php echo $row_prd['p_name']; ?></p>
										<p><strong><?php echo number_format($row_prd['p_price'],2); ?> บาท</strong></p>
										<h4><a class="shopBtn" href="cart.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" title="add to cart"><span class="totalInCart" ></span> เพิ่มลงตระกล้า </a></h4>
										
										<br class="clr">
									</div>


								<?php } ?>
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