<?php include 'header.php';?>
<!-- 
Body Section 
-->
<div class="row">
<?php include 'sidebar.php'; ?>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">FORGOT YOUR PASSWORD</li>
    </ul>
	<div class="well well-small">
	<h3> FORGOT YOUR PASSWORD</h3>	
	<hr class="soft"/>
	
	Please enter the e-mail address used to register. We will e-mail you your new password.<br/><br/><br/>
	
	
	<form class="form-inline" action="reset_password.php" method="post">
		<label class="control-label" for="inputEmail">E-mail address</label>
		<input type="email" class="span4" placeholder="Email" name="mem_email">	
		<input type="hidden" name="resetpassword">		  
		<button type="submit" class="shopBtn block">Send My Password</button>
	</form>
</div>
</div>
</div>

<!--
Footer
-->
<?php include 'footer.php'; ?>