<?php require_once('Connections/condb.php'); ?>


<?php
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
  //print_r($_SESSION);
$colname_buyer = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_buyer = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_buyer = "SELECT * FROM tbl_member WHERE mem_username = '$colname_buyer'";
$buyer = mysql_query($query_buyer, $condb) or die(mysql_error());
$row_buyer = mysql_fetch_assoc($buyer);
$totalRows_buyer = mysql_num_rows($buyer);
mysql_select_db($database_condb);
$query_rb = "SELECT * FROM tbl_bank";
$rb = mysql_query($query_rb, $condb) or die(mysql_error());
$row_rb = mysql_fetch_assoc($rb);
$totalRows_rb = mysql_num_rows($rb);
$colname_cartdone = "-1";
if (isset($_GET['order_id'])) {
  $colname_cartdone = $_GET['order_id'];
}
mysql_select_db($database_condb);
$query_cartdone = "
  SELECT * FROM 
  tbl_order as o, 
  tbl_order_detail as d, 
  tbl_product as p,
  tbl_member  as m
  WHERE o.order_id = '$colname_cartdone' 
  AND o.order_id=d.order_id 
  AND d.p_id=p.p_id
  AND o.mem_id = m.mem_id 
  ORDER BY o.order_date ASC";
$cartdone = mysql_query($query_cartdone, $condb) or die(mysql_error());
$row_cartdone = mysql_fetch_assoc($cartdone);
$totalRows_cartdone = mysql_num_rows($cartdone);
?>