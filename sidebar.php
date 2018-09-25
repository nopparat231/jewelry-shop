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
$query_typeprd = "SELECT * FROM tbl_type ORDER BY t_id ASC";
$typeprd = mysql_query($query_typeprd, $condb) or die(mysql_error());
$row_typeprd = mysql_fetch_assoc($typeprd);
$totalRows_typeprd = mysql_num_rows($typeprd);
?>

<div id="sidebar" class="span3">
	<div class="well well-small">
		<ul class="nav nav-list">

			<?php do { ?>

				<li><a href="index.php?t_id=<?php echo $row_typeprd['t_id'];?>&type_name=<?php echo $row_typeprd['t_name'];?>"><span class="icon-chevron-right"></span><?php echo $row_typeprd['t_name']; ?></a></li>

			<?php } while ($row_typeprd = mysql_fetch_assoc($typeprd)); ?>


			<!-- สิ้นสุดแถบด้านข้าง -->


			<li style="border:0"> &nbsp;</li>

			<li> <a class="totalInCart" href="cart.php"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"><?php echo $meQty; ?></span></strong></a></li>
		</ul>
	</div>

	<?php

mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY p_view desc limit 0,4";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>

	<div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>

	<a class="shopBtn btn-block" href="best_sell.php">สินค้าขายดี<br></a>
	<br>
	<br>
	<ul class="nav nav-list promowrapper">

		<?php if ($totalRows_prd > 0) {?>

	<?php 

	do { ?>
		
		<li>
			<div class="thumbnail">
				<a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="bootstrap ecommerce templates">
				<div class="caption">
					<h4><a class="defaultBtn" href="product_details.php?p_id=<?php echo $row_prd['p_id'];?>">VIEW</a> <span class="pull-right"><?php echo $row_prd['p_price']; ?></span></h4>
				</div>
			</div>
		</li>
		<li style="border:0"> &nbsp;</li>
<?php } 

while ($row_prd = mysql_fetch_assoc($prd)); ?>
<?php } mysql_free_result($prd); ?>


	</ul>

</div>


<?php
mysql_free_result($typeprd);
?>
