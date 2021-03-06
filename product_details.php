<?php require_once('Connections/condb.php'); ?>
<?php

include 'header.php';?>
<div class="row">
	<!-- sidebar -->
	<?php include 'sidebar.php';?>
	<!-- end sidebar -->
	<?php

	$pp_id = $_GET['p_id'];

	mysql_select_db($database_condb);
	$query_prdt = "SELECT * FROM tbl_product WHERE p_id = '$pp_id'";
	$prdt = mysql_query($query_prdt, $condb);
	$row_prdt = mysql_fetch_assoc($prdt);
	$totalRows_prdt = mysql_num_rows($prdt);

	$t_id = $row_prdt['t_id'];
//update product view
	$p_id = $row_prdt['p_id'];
	$p_view = $row_prdt['p_view'];
	$count = $p_view + 1;

	$sql= "UPDATE tbl_product SET  p_view=$count WHERE p_id = $p_id";
	mysql_query($sql , $condb);
//

	?>

	<div class="span9">
		<ul class="breadcrumb">
			<li><a href="index.php">หน้าแรก</a> <span class="divider">/</span></li>
			<li><a href="grid-view.php">สินค้า</a> <span class="divider">/</span></li>
			<li class="active">ตัวอย่าง</li>
		</ul>
		<div class="well well-small">
			<div class="row-fluid">
				<div class="span5">
					<div id="myCarousel" class="carousel slide cntr">
						<div class="carousel-inner">
							<div class="item active">
								<a href="pimg/<?php echo $row_prdt['p_img1'];?>"> <img src="pimg/<?php echo $row_prdt['p_img1'];?>" alt="" style="width:100%"></a>
							</div>
							<div class="item">
								<a href="pimg/<?php echo $row_prdt['p_img2'];?>"> <img src="pimg/<?php echo $row_prdt['p_img2'];?>" alt="" style="width:100%"></a>
							</div>

						</div>
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
					</div>
				</div>
				<div class="span7">

					<h3>สินค้า <br /> <b> <?php echo $row_prdt['p_name']; ?></b></h3>
					<hr class="soft"/>

					<form class="form-horizontal qtyFrm" action="cart.php" method="get">
						<div class="control-group">
							<label class="control-label"><span><b>[ <?php echo number_format($row_prdt['p_price'],2); ?> ] บาท</b></span></label><br>


						</div>
						<label class="control-label"><span>ไซส์ </span> 	
							<?php if (is_numeric($row_prdt['p_size'])): ?>
						<select id="btn1" name="size" style="width: 60px">
							<option value="<?php echo $row_prdt['p_size']; ?>"><?php echo $row_prdt['p_size']; ?></option>
							<option value="<?php echo $row_prdt['p_size']+1; ?>"><?php echo $row_prdt['p_size']+1; ?></option>
							<option value="<?php echo $row_prdt['p_size']+2; ?>"><?php echo $row_prdt['p_size']+2; ?></option>
							<option value="<?php echo $row_prdt['p_size']+3; ?>"><?php echo $row_prdt['p_size']+3; ?></option>
							
						</select>




						<?php else: ?>
							<?php echo $row_prdt['p_size']; ?>
						<?php endif ?>
						
					</label>

					<br /><br />

					<h5><span class="icon-eye-open"></span> <?php echo $row_prdt['p_view']; ?></h5>

					<h4>สินค้าคงเหลือ <?php echo $row_prdt['p_qty']; ?> <?php echo $row_prdt['p_unit']; ?></h4>
					<br>


					<button type="submit" name="act" value="add" class="shopBtn"><span class=" icon-shopping-cart"></span> เพิ่ลงตระกล้า</button>
					<input  name="p_id" id="pid" value="<?php echo $p_id;?>" style="visibility:hidden"></input>
				</form>
			</div>
		</div>



		<hr class="softn clr" />


		<ul id="productDetail" class="nav nav-tabs">
			<li class="active"><a href="#home" data-toggle="tab">ข้อมูลสินค้า</a></li>
			<li class=""><a href="#profile" data-toggle="tab">สินค้าอื่นๆ </a></li>

		</ul>
		<div id="myTabContent" class="tab-content tabWrapper">
			<div class="tab-pane fade active in" id="home">
				<h4>รายละเอียด</h4>
				<?php echo $row_prdt['p_detial']; ?>

			</div>
			<div class="tab-pane fade" id="profile">
				<?php include 'tbl_prd.php'; ?>

				<?php if ($totalRows_prd > 0) {?>

					<?php do { ?>
						<div class="row-fluid">
							<div class="span2">
								<img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="">
							</div>
							<div class="span6">
								<h5><?php echo $row_prd['p_name']; ?> </h5>
								<p><?php echo substr($row_prd['p_detial'], 0, 290); ?> ...</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> <?php echo number_format($row_prd['p_price'],2); ?> บาท</h3>

									<div class="btn-group">
										<a href="cart.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> เพิ่ลงตระกล้า</a>
										<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soft">
					<?php } while ($row_prd = mysql_fetch_assoc($prd)); ?>
				<?php } mysql_free_result($prd); ?>


			</div>
		</div>

	</div>
</div>
</div> <!-- Body wrapper -->
<!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->

<script type="text/javascript">

$(document).ready(function(){

	$("#btn1").on('change', function(){

			$.post("upsize_aj.php", { 
			data1: $("#btn1").val(), 
			data2: $("#pid").val()}, 
				function(result){
					$("#div1").html(result);
				}
			);

		});
	});
</script>
