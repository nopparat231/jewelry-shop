<?php require_once('../Connections/condb.php'); ?>
<?php

$colname_mm = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_mm = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_mm = "SELECT * FROM tbl_admin WHERE admin_user = '$colname_mm'";
$mm = mysql_query($query_mm, $condb) or die(mysql_error());
$row_mm = mysql_fetch_assoc($mm);
$totalRows_mm = mysql_num_rows($mm);
?>


<?php
mysql_free_result($mm);
?>
