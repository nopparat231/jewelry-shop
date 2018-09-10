<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Twitter Bootstrap shopping cart</title>
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
	<body>
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

					<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php" >Home	</a></li>

					<li class="<?= ($activePage == 'list-view') ? 'active':''; ?>"><a href="list-view.php" >List View</a></li>

					<li class="<?= ($activePage == 'grid-view') ? 'active':''; ?>"><a href="grid-view.php" >Grid View</a></li>

					<li class="<?= ($activePage == 'three-col') ? 'active':''; ?>"><a href="three-col.php" >Three Column</a></li>

					<li class="<?= ($activePage == 'four-col') ? 'active':''; ?>"><a href="four-col.php" >Four Column</a></li>

					<li class="<?= ($activePage == 'general') ? 'active':''; ?>"><a href="general.php" >General Content</a></li>
				</ul>
				<form action="#" class="navbar-search pull-left">
					<input type="text" placeholder="Search" class="search-query span2">
				</form>
				<ul class="nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
						<div class="dropdown-menu">
							<form class="form-horizontal loginFrm">
								<div class="control-group">
									<input type="text" class="span2" id="inputEmail" placeholder="Email">
								</div>
								<div class="control-group">
									<input type="password" class="span2" id="inputPassword" placeholder="Password">
								</div>
								<div class="control-group">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
									<button type="submit" class="shopBtn btn-block">Sign in</button>
								</div>
							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 
Body Section 
-->
