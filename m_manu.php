
<div id="sidebar" class="span3">
	<div class="well well-small">
		<ul class="nav nav-list">
			<li><a href="?page=mycart"><span class="icon-chevron-right"></span> รายการสั่งซื้อทั้งหมด</a></li>
			
			<li><a href="my_order.php?mem_id=<?php echo $row_pf['mem_id']; ?>"><span class="icon-chevron-right" ></span> แก้ไขข้อมูลส่วนตัว</a></li>

			<li><a href="logout.php" > <span class="icon-chevron-right"></span> ออกจากระบบ</a></li>

		</ul>
	</div>
	<?php include 'best_prd.php'; ?>
</div>