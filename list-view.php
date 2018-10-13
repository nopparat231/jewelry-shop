<?php include 'header.php';?>

<!-- 
Body Section 
-->
<div class="row">
	<!-- sidebar -->
	<?php include 'sidebar.php';?>
	<!-- end sidebar -->
	<?php include 'tbl_prd.php'; ?><!--  นำเข้าไฟล์ตาราง สินค้า -->
	<div class="span9">
		<div class="well well-small">
			<?php if ($totalRows_prd > 0) {

				do {

					?>

					<div class="row-fluid">	  


						<div class="span2">
							<img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="">
						</div>
						<div class="span6">
							<h5><?php echo $row_prd['p_name']; ?> </h5>
							<p><?php echo substr($row_prd['p_detial'], 0, 290); ?> ...</p>
						</div>
						<div class="span4 alignR">
							<form class="form-horizontal qtyFrm">
								<h3> <?php echo number_format($row_prd['p_price'],2); ?> บาท</h3>

								<?php 
								$qty = $row_prd['p_qty'];
								if($qty <= 0){ ?>

									<div class="btn-group">
										<a href="cart.php" class="defaultBtn" dissable ><span class=" icon-shopping-cart"></span> เพิ่มลงตระกล้า</a>
										<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" class="shopBtn">VIEW</a>
									</div>


								<?php }else{ ?>

									<div class="btn-group">
										<a href="cart.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" class="defaultBtn"><span class=" icon-shopping-cart"></span> เพิ่มลงตระกล้า</a>
										<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" class="shopBtn">VIEW</a>
									</div>
								<?php } ?>
							</form>
						</div>
					</div>
					<hr class="soften">

					<?php 

				} while ($row_prd = mysql_fetch_assoc($prd)); ?>
			<?php } mysql_free_result($prd); ?>



		</div>
	</div>
</div>
<!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->