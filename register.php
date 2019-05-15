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
						<input type="text" name="mem_username" required placeholder="ชื่อผู้ใช้" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="4"  autocomplete="off">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="mem_password">รหัสผ่าน : <sup>*</sup></label>
					<div class="controls">
						<input type="password" id="txtNewPassword" name="mem_password" required placeholder="รหัสผ่าน" pattern="^[a-zA-Z0-9]+$" minlength="6"  autocomplete="off">
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
					<label class="control-label" for="mem_name">ชื่อ : <sup>*</sup></label>
					<div class="controls">
						<input type="text" name="mem_name" required placeholder="ชื่อ - สกุล"  autocomplete="off" maxlength="250" minlength="3">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="meml_name">สกุล : <sup>*</sup></label>
					<div class="controls">
						<input type="text" name="meml_name" required placeholder="สกุล"  autocomplete="off" axlength="250" minlength="3">
					</div>
				</div>

				<!-- ที่อยู่ -->
				<?php include 'from_add.php'; ?>



				<div class="control-group">
					<label class="control-label" for="mem_tel">เบอร์ โทร : <sup>*</sup></label>
					<div class="controls">
						<input type="textarea" name="mem_tel" required placeholder="0912345678" pattern="[0-9]{10}" minlength="2" title="เบอร์โทร 0-9" maxlength="10"  autocomplete="off">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">อีเมล์ <sup>*</sup></label>
					<div class="controls">
						<input type="text" name="mem_email" required placeholder="อีเมล์"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="กรุณากรอก Email ให้ถูกต้อง" minlength="10"  autocomplete="off">
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

<script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

<link rel="stylesheet" href="./jquery.Thailand.js/dist/jquery.Thailand.min.css">
<script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

<script type="text/javascript">

	$.Thailand({
    database: './jquery.Thailand.js/database/db.json', // path หรือ url ไปยัง database
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
});
</script>
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
