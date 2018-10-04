<!-- 
Clients 
-->

<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/6.png"></a>
		</div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">
	<div class="row-fluid">
		<div class="span2">
			<h5>Your Account</h5>
			<?php

			if(isset($_SESSION['MM_Username']) != ''){ 	?>

				<a href="my_order.php?page=mycart" >My Account</a><br>
				<a href="#">ORDER HISTORY</a><br>
			<?php }?>

			<a href="register.php">REGISTER</a><br>
			<a href="contact.php">ADDRESSES</a><br>

		</div>
		<div class="span2">
			<h5>Iinformation</h5>
			<a href="contact.php">CONTACT</a><br>
			
		</div>
		<div class="span2">
			<h5>Our Offer</h5>
			<a href="best_sell.php">TOP SELLERS</a><br>
			<a href="products.php">SPECIALS</a><br>
			
		</div>
		<div class="span6">
			<h5>The standard chunk of Lorem</h5>
			The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
			those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
			Malorum" by Cicero are also reproduced in their exact original 
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