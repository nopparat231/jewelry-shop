<?php
mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY p_view desc limit 0,4";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>

	<div class="well well-small" >
		<!-- <a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a> -->

	</div>

	<a class="shopBtn btn-block" href="best_sell.php">สินค้าขายดี<br></a>
	<br>
	<br>
	<ul class="nav nav-list promowrapper">

		<?php if ($totalRows_prd > 0) {?>

	<?php 

	do { ?>
		
		<li>
			<div class="thumbnail">
				<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> ดูข้อมูลสินค้า</a>
				<img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="bootstrap ecommerce templates">
				<div class="caption">
					<h4><a class="defaultBtn" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>">ดูข้อมูล</a> <span class="pull-right"><?php echo number_format($row_prd['p_price'],2); ?></span></h4>
				</div>
			</div>
		</li>
		<li style="border:0"> &nbsp;</li>
<?php } 

while ($row_prd = mysql_fetch_assoc($prd)); ?>
<?php } mysql_free_result($prd); ?>


	</ul>

