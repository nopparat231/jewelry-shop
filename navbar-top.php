<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>

		
				<?php 

				$activePage = basename($_SERVER['PHP_SELF'], ".php");



				if (isset($_SESSION['shopping_cart'])) {
					$meQty = 0;
					foreach ($_SESSION['shopping_cart'] as $meItem) {
						$meQty = $meQty + $meItem;
					}
				} else {
					$meQty = 0;
				}


				?>
				<a href="index.php" class="<?= ($activePage == 'index') ? 'active':''; ?>""> <span class="icon-home"></span> Home</a> 

				<a href="my_order.php?page=mycart" ><span class="icon-user"></span> My Account</a> 

				<a href="register.php" class="<?= ($activePage == 'register') ? 'active':''; ?>""><span class="icon-edit"></span> Free Register </a> 

				<a href="contact.php" class="<?= ($activePage == 'contact') ? 'active':''; ?>""><span class="icon-envelope"></span> Contact us</a>

				<a href="cart.php" class="<?= ($activePage == 'cart') ? 'active':''; ?>""><span class="icon-shopping-cart"></span> <span class="badge badge-warning"><?php echo $meQty; ?> Item(s)</span></a>

			</div>
		</div>
	</div>
</div>