<?php require_once('Connections/condb.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
	{
		if (PHP_VERSION < 6) {
			$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
		}
		$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
		switch ($theType) {
			case "text":
			$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			break;
			case "long":
			case "int":
			$theValue = ($theValue != "") ? intval($theValue) : "NULL";
			break;
			case "double":
			$theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
			break;
			case "date":
			$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			break;
			case "defined":
			$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
			break;
		}
		return $theValue;
	}
}


mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY p_id DESC ";
$prd = mysql_query( $query_prd,$condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>



<div class="row">

	<!-- -------------Show Product----------------->
	<div class="span9">

		<div class="well well-small">
			<h3>Our Products </h3>
			<!-- <div class="row"> -->
				<div class="row-fluid">

					<ul class="thumbnails">

						<?php if ($totalRows_prd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->

						<?php 
						$n = 1;
						do { //วนลูปแสดงสินค้า

						if($n % 3 == 1){ //ตรวจสอบว่าแสดงสินค้าไปแล้วกี่ชิ้น ถ้าแสดงถึงสามชิเนแล้ว ให้แสดง class="row-fluid" 
						echo '<div class="row-fluid">';
					}
					?>

					<li class="span4">
						<div class="thumbnail">
							<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" class="overlay"></a>
							<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> ดูข้อมูลสินค้า</a>
							<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>"><img src="pimg/<?php echo $row_prd['p_img1'];?>" alt=""></a>
						<?php include 'outstock.php'; ?>
						</div>
					</li>

					<?php
						if($n % 3 == 0){ //ตรวจสอบว่าแสดงสินค้าไปแล้วกี่ชิ้น ถ้าแสดงถึงสามชิเนแล้ว ให้แสดง class="row-fluid" 
						echo '</div><br />';
					}
					$n += 1;

				} while ($row_prd = mysql_fetch_assoc($prd)); ?>
			<?php } mysql_free_result($prd); ?>

		</ul>
	</div>
</div>
</div>
<!-- --------------End Show Product------------- -->
</div>
