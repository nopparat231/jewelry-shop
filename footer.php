<!--
Clients
-->

<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text"></span></h4>
	<hr class="soften"/>
	<div class="row">

	</div>
</section>

<!--
Footer
-->
<footer class="footer">
	<div class="row-fluid">
		<div class="span2">
			<h5>บัญชีของคุณ</h5>
			<?php

			if(isset($_SESSION['MM_Username']) != ''){ 	?>

				<a href="my_order.php?page=mycart" >บัญชีของฉัน</a><br>
				<a href="#">คำสั่งซื้อ</a><br>
			<?php }?>

			<a href="register.php">ลงทะเบียน</a><br>
			<a href="contact.php">ที่อยู่</a><br>

		</div>
		<div class="span2">
			<h5>
ข้อมูล</h5>
			<a href="contact.php">ติดต่อ</a><br>

		</div>
		<div class="span2">
			<h5>ข้อเสนอของเรา</h5>
			<a href="best_sell.php">สินค้าขายดี</a><br>
			<a href="products.php">พิเศษ</a><br>

		</div>
		<div class="span6">
			<h5></h5>
			414 สีลม36 แขวงสุริยวงศ์ เขตบางรัก กรุงเทพฯ
			081-493-3899
		</div>
	</div>
</footer>
</div><!-- /container -->


<div class="copyright">
	<div class="container">
		<p class="pull-right">
			<?php include 'how_to_buy.php'; ?>
			<?php do { ?>
				<img src="bimg/<?php echo $row_rb['b_logo']; ?>" alt="payment"  width="4%">
			<?php } while ($row_rb = mysql_fetch_assoc($rb)); ?>
			<?php
			mysql_free_result($rb);
			?>
<span class="pull-right">โปรเจคร้านเพรช &copy; 2018</span>
		</p>

	</div>
</div>
<a class="gotop" id="gotop"><i class="icon-double-angle-up"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="assets/js/shop.js"></script>
</body>
</html>
<script type="text/javascript">
	jQuery("#gotop").click(function (){
		jQuery('html, body').animate({
			scrollTop: jQuery('#top').offset().top
		}, 1200);
	});

</script>
