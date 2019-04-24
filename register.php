<?php include 'header.php';?>
<!--
Body Section
-->
	<div class="row">
<!-- sidebar -->
<?php include 'sidebar.php';?>
<!-- end sidebar -->

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">หน้าแรก</a> <span class="divider">/</span></li>
		<li class="active">สมัครสมาชิก</li>
    </ul>
	<h3> สมัครสมาชิก</h3>
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal" action="register_db.php" method="POST" name="register" >
		<h3>*กรุณากรอกข้อมูลให้ครบทุกช่อง</h3>

		<div class="control-group">
			<label class="control-label" for="mem_username">ชื่อผู้ใช้ : <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="mem_username" required placeholder="ชื่อผู้ใช้" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="4" >
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="mem_password">รหัสผ่าน : <sup>*</sup></label>
			<div class="controls">
			  <input type="password" id="txtNewPassword" name="mem_password" required placeholder="รหัสผ่าน" pattern="^[a-zA-Z0-9]+$" minlength="6">
			</div>
		 </div>

		 <div class="control-group">
			<label class="control-label" for="mem_check">ยืนยัน รหัสผ่าน : <sup>*</sup></label>
			<div class="controls">
			  <input type="password"  id="txtConfirmPassword" onkeyup="checkPasswordMatch();" required placeholder="ยืนยัน รหัสผ่าน" pattern="^[a-zA-Z0-9]+$" minlength="6">
			<div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
			</div>
		 </div>

		 <div class="control-group">
			<label class="control-label" for="mem_name">ชื่อ - สกุล : <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="mem_name" required placeholder="ชื่อ - สกุล" >
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="mem_address">ที่อยู่ : <sup>*</sup></label>
			<div class="controls">
			  <textarea type="textarea" name="mem_address" required placeholder="ที่อยู่" ></textarea>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="mem_tel">เบอร์ โทร : <sup>*</sup></label>
			<div class="controls">
			  <input type="textarea" name="mem_tel" required placeholder="0912345678" pattern="[0-9]{10}" minlength="2" title="เบอร์โทร 0-9" minlength="10">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">อีเมล์ <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="mem_email" required placeholder="อีเมล์"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="กรุณากรอก Email ให้ถูกต้อง" minlength="10" >
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="ยืนยัน" class="exclusive shopBtn">
		</div>
	</div>
	</form>
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
<script type="text/javascript">
	function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

</script>
