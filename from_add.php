
<div class="control-group">
	
	<label class="control-label" for="mem_address">ที่อยู่ : <sup>*</sup></label>
	<div class="controls">

		<input type="text" name="a" class="form-control" placeholder="บ้านเลขที่, หมู่, หมู่บ้าน, ซอย" required autocomplete="off">

	</div>
</div>

<div class="control-group">

	<label class="control-label" for="mem_address">แขวง/ตำบล : <sup>*</sup></label>
	<div class="controls">
		<input type="text" id="district" name="t" class="form-control" required autocomplete="off" placeholder="แขวง/ตำบล" >

	</div>
</div>


<div class="control-group">
	
	<label class="control-label" for="mem_address">เขต/อำเภอ : <sup>*</sup></label>
	<div class="controls">

		<input type="text" id="amphoe" name="o" class="form-control" required autocomplete="off" placeholder="เขต/อำเภอ">

	</div>
</div>



<div class="control-group">
	<label class="control-label" for="mem_address">จังหวัด : <sup>*</sup></label>
	<div class="controls">


		<input type="text" id="province" name="j" class="form-control" required autocomplete="off" placeholder="จังหวัด">

	</div>
</div>

<div class="control-group">
	
	<label class="control-label" for="mem_address">รหัสไปรษณีย์ : <sup>*</sup></label>
	<div class="controls" >

		<input type="text" id="zipcode" name="p" class="form-control" required autocomplete="off" placeholder="รหัสไปรษณีย์">
	</div>

</div>
<!--
	$mem_address = $_POST['a']." ตำบล ".$_POST['t']." อำเภอ ".$_POST['o']." จังหวัด ".$_POST['j']." รหัสไปรษณีย์ ".$_POST['p']; -->




<!-- <textarea name="mem_address" type="textarea" required class="form-control" id="mem_address" placeholder="ที่อยู่" ></textarea>  -->
