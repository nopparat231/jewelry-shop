<?php include 'header.php';?><div class="row">
<!-- sidebar -->
<?php include 'sidebar.php';?>
<!-- end sidebar -->
<?php 
 session_start();
include 'login_db.php'; ?>

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
	
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form name="formlogin" action="<?php echo $loginFormAction; ?>" method="POST" id="login">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				  <input class="span3"  type="text" name="mem_username" id="mem_username" placeholder="ชื่อผู้ใช้" >
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="mem_password"  id="mem_password" placeholder="รหัสผ่าน" >
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="defaultBtn">Sign in</button> <a href="#">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
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
