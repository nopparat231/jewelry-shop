<?php include 'header.php';?>
<!-- 
Body Section 
-->
<!-- 
Three column view
-->
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


	<!-- -------------Show Product----------------->
	

		
			<h3>มุมมองแบบ 3 คอลัม </h3>
			<!-- <div class="row"> -->
			

					<ul class="thumbnails">

						<?php if ($totalRows_prd > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->

						 
						<?php do {  ?> <!-- วนลูปแสดงสินค้า -->


					<li class="span4">
						<div class="thumbnail">
							<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" class="overlay"></a>
							<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
							<a href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>"><img src="pimg/<?php echo $row_prd['p_img1'];?>" alt=""></a>
							<?php include 'outstock.php'; ?>
						</div>
					</li>
	
				<?php } while ($row_prd = mysql_fetch_assoc($prd)); ?>
			<?php } mysql_free_result($prd); ?>

		</ul>



<!-- --------------End Show Product------------- -->

<!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->