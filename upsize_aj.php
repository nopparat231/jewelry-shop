
<?php require_once('Connections/condb.php'); ?>
<?php
$size = $_POST["data1"];
$pid = $_POST["data2"];

$sql= "UPDATE tbl_product SET  p_size='$size' WHERE p_id = '$pid'";
mysql_query($sql , $condb);
?>
<option value="39">39</option>