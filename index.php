<?php include 'header.php';?>
<!-- แถบบน -->
<div class="row">

<!-- แถบข้าง-->

<?php include 'sidebar.php';?>

<!-- end sidebar -->

	<div class="span9">
	<!-- รูปภาพสไล -->
<?php include 'carousel_head.php'; ?>
	<!-- End รูปภาพสไล -->
<!--
New แสดงสินค้าล่าสุดs
-->
	<?php include 'new_prd.php'; ?>

	<!--
End New แสดงสินค้าล่าสุดs
-->
	<!--
	Featured สินค้าแนะนำ
	-->
<?php include 'featured_prd.php'; ?>
	<!--
	End Featured สินค้าแนะนำ
	-->
		
	
	
	<hr>
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="products.php">แสดงทั้งหมด <span class="icon-plus"></span></a>
	<b>สินค้าทั้งหมด</b> 
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