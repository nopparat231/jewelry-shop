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

				include 'cart_session.php';
				$cart_count = 0;
				if(!empty($_SESSION["shopping_cart"])) {
					$cart_count = count(array_keys($_SESSION["shopping_cart"]));
				}
				$totaln = 0;

				if(!empty($_SESSION['shopping_cart']))
				{
					require_once('Connections/condb.php'); 
					foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
					{	
						mysql_select_db($database_condb);
						$sqln = "select * from tbl_product where p_id=$p_id";
						$queryn = mysql_query($sqln,$condb);
						$rown = mysql_fetch_array($queryn);
						$sum = $rown['p_price'] * $p_qty;
						$totaln += $sum;

						
					}
				}


				?>

				


				<a href="index.php" class="<?= ($activePage == 'index') ? 'active':''; ?>""> <span class="icon-home"></span> หน้าแรก</a> 

				<?php

				if(isset($_SESSION['MM_Username']) != ''){ 	?>

					<a href="my_order.php?page=mycart" ><span class="icon-user"></span> โปรไฟล์</a> 

				<?php }?>


					<a href="register.php" class="<?= ($activePage == 'register') ? 'active':''; ?>""><span class="icon-edit"></span> สมัคสมาชิก </a> 

					<a href="contact.php" class="<?= ($activePage == 'contact') ? 'active':''; ?>""><span class="icon-envelope"></span> ติดต่อ</a>

					<a href="cart.php" class="<?= ($activePage == 'cart') ? 'active':''; ?>""><span class="icon-shopping-cart"></span> <span class="badge badge-warning"><?php echo $cart_count; ?> ชิ้น</span></a>

				</div>
			</div>
		</div>
	</div>
