 <?php
 session_start();
 ?>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>JJ Shop</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="">
 	<meta name="author" content="">
 	<!-- Bootstrap styles -->
 	<link href="assets/css/bootstrap.css" rel="stylesheet"/>
 	<!-- Customize styles -->
 	<link href="style.css" rel="stylesheet"/>
 	<!-- font awesome styles -->
 	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons -->
		<link rel="shortcut icon" href="assets/ico/favicon.ico">
	</head>
	<body  id="top" >

<!-- 
	Upper Header Section 
-->
<?php include 'navbar-top.php'; ?>

<!--
Lower Header Section 
-->
<div class="container">
	<div id="gototop"> </div>
	<header id="header">
		<div class="row">
			<div class="span4">
				<h1>
					<a class="logo" href="index.php"><span>Twitter Bootstrap ecommerce template</span> 
						<img src="assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
					</a>
				</h1>
			</div>
			<div class="span4">
				<div class="offerNoteWrapper">
					<h1 class="dotmark">
						<i class="icon-cut"></i>
						Twitter Bootstrap shopping cart HTML template is available @ $14
					</h1>
				</div>
			</div>
			<div class="span4 alignR">
				<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
				<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
				<span class="btn btn-warning btn-mini">$</span>
				<span class="btn btn-mini">&pound;</span>
				<span class="btn btn-mini">&euro;</span>
			</div>
		</div>
	</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse">
				<ul class="nav">

					<?php 
					
					$activePage = basename($_SERVER['PHP_SELF'], ".php");
					

					?>

					<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php" >หน้าหลัก</a></li>

					<li class="<?= ($activePage == 'list-view') ? 'active':''; ?>"><a href="list-view.php" >มุมมอง รายการ</a></li>

					<li class="<?= ($activePage == 'grid-view') ? 'active':''; ?>"><a href="grid-view.php" >มุมมอง ตาราง</a></li>

					<li class="<?= ($activePage == 'three-col') ? 'active':''; ?>"><a href="three-col.php" >มุมมอง 3 คอลัม</a></li>

					<li class="<?= ($activePage == 'four-col') ? 'active':''; ?>"><a href="four-col.php" >มุมมอง 4 คอลัม</a></li>

				</ul>
				<form action="#" class="navbar-search pull-left">
					<input type="text" placeholder="Search" class="search-query span2">
				</form>
				<ul class="nav pull-right">
					<?php

					if(isset($_SESSION['MM_Username']) != ''){


						?>

						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-user"></span> โปรไฟล์ <?php echo $_SESSION['MM_Username']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu">

								<li><a href="my_order.php?page=mycart"><span class="icon-chevron-right"></span> รายการสั่งซื้อทั้งหมด</a></li>

							

								<li><a href="logout.php" class="list-group-item list-group-item-danger"><span class="icon-chevron-right"></span> ออกจากระบบ</a></li>



							</ul>
						</li>
					<?php }else{?>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>

							<?php include 'login_db.php' ?>

							<div class="dropdown-menu">
								<form class="form-horizontal loginFrm" action="<?php echo $loginFormAction; ?>" method="POST" id="login">
									<div class="control-group">
										<input type="text" class="span2" name="mem_username" id="mem_username" placeholder="ชื่อผู้ใช้">
									</div>
									<div class="control-group">
										<input type="password" class="span2" name="mem_password"  id="mem_password" placeholder="รหัสผ่าน" >
									</div>
									<div class="control-group">
										<button type="submit" class="shopBtn btn-block">Sign in</button>
										<a href="#">Forget password?</a>
									</div>
								</form>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 
Body Section 
-->
