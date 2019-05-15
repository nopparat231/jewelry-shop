<br>
<br>
<br>
<?php include('mm.php');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class="glyphicon glyphicon-user"> </b>&nbsp;<b>ผูู้ใช้ระบบ : <?php echo $row_mm['admin_name'];?></b>
<br>
<nav class="navbar navbar-inverse sidebar">
	<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
		<ul class="nav navbar-nav">

			<?php if ($row_mm['status'] === 'superadmin') { ?>

				<li><a href="report_all_prd.php">รายงานสินค้าทั้งหมด <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				<li><a href="report_all_order.php">รายงานการสั่งซื้อ <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				
						
				
				<li><a href="report_all_type.php">รายงานประเภทสินค้า <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				<li><a href="report_all_bank.php">รายงานธนาคาร <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				
				


				<li><a href="../logout.php" >ออกจากระบบ <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-log-in"></span></a></li>
			<?php }elseif ($row_mm['status'] === 'admin') { ?>
			<!--	<li><a href="index.php" >รายการสั่งซื้อ<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-list-alt"></span></a></li>
				<li><a href="list_product.php">จัดการสินค้า <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				<li><a href="list_product_type.php">จัดการประเภทสินค้า <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>-->
				<li><a href="list_admin.php" >จัดการผู้ดูแลระบบ <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-user"></span></a></li>
				<li><a href="list_member.php">จัดการสมาชิค <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-user"></span></a></li>

			<!--	<li><a href="list_bank.php">จัดการข้อมูลธนาคาร <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-xbt"></span></a></li>


				<li><a href="carousel.php">แก้ไขรูปสไลด์ <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-picture"></span></a></li>-->

				<li><a href="../logout.php"><font style="color: #CD8373">ออกจากระบบ</font>  <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-log-in"></span></a></li>

			<?php }elseif ($row_mm['status'] === 'staff') { ?>
				<li><a href="index.php" >รายการสั่งซื้อ<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-list-alt"></span></a></li>
				<li><a href="list_product.php">จัดการสินค้า <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				<li><a href="list_product_type.php">จัดการประเภทสินค้า <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				<!--<li><a href="list_admin.php" >จัดการผู้ดูแลระบบ <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-user"></span></a></li>
				<li><a href="list_member.php">จัดการสมาชิค <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-user"></span></a></li>-->

				<li><a href="list_bank.php">จัดการข้อมูลธนาคาร <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-xbt"></span></a></li>


				<li><a href="carousel.php">แก้ไขรูปสไลด์ <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-picture"></span></a></li>

				<li><a href="../logout.php"><font style="color: #CD8373">ออกจากระบบ</font>  <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon glyphicon-log-in"></span></a></li>

			<?php }?>
            
		</ul>
	</div>
</nav>

<style type="text/css">
body,html{
	height: 100%;
}

nav.sidebar, .main{
	-webkit-transition: margin 200ms ease-out;
	-moz-transition: margin 200ms ease-out;
	-o-transition: margin 200ms ease-out;
	transition: margin 200ms ease-out;
}

.main{
	padding: 10px 10px 0 10px;
}

@media (min-width: 765px) {

	.main{
		position: absolute;
		width: calc(100% - 40px);
		margin-left: 40px;
		float: right;
	}

	nav.sidebar:hover + .main{
		margin-left: 200px;
	}

	nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
		margin-left: 0px;
	}

	nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
		text-align: center;
		width: 100%;
		margin-left: 0px;
	}

	nav.sidebar a{
		padding-right: 13px;
	}

	nav.sidebar .navbar-nav > li:first-child{
		border-top: 1px #e5e5e5 solid;
	}

	nav.sidebar .navbar-nav > li{
		border-bottom: 1px #e5e5e5 solid;
	}

	nav.sidebar .navbar-nav .open .dropdown-menu {
		position: static;
		float: none;
		width: auto;
		margin-top: 0;
		background-color: transparent;
		border: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
	}

	nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
		padding: 0 0px 0 0px;
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
		color: #777;
	}

	nav.sidebar{
		width: 200px;
		height: 100%;
		margin-left: -160px;
		float: left;
		margin-bottom: 0px;
	}

	nav.sidebar li {
		width: 100%;
	}

	nav.sidebar:hover{
		margin-left: 0px;
	}

	.forAnimate{
		opacity: 0;
	}
}

@media (min-width: 1330px) {

	.main{
		width: calc(100% - 200px);
		margin-left: 200px;
	}

	nav.sidebar{
		margin-left: 0px;
		float: left;
	}

	nav.sidebar .forAnimate{
		opacity: 1;
	}
}

nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
	color: #CCC;
	background-color: transparent;
}

nav:hover .forAnimate{
	opacity: 1;
}
section{
	padding-left: 15px;
}



</style>
