<?php require_once('../Connections/condb.php'); ?>
<?php

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "carousel")) {
  $insertSQL = "INSERT INTO tbl_config (carousel_config) VALUES ('$_POST['carousel_config']')";

mysql_select_db($database_condb);
  $Result1 = mysql_query($insertSQL, $condb) or die(mysql_error());

  $insertGoTo = "add_carousel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header("Location: %s", $insertGoTo);
}

mysql_select_db($database_condb);
$query_carousel = "SELECT * FROM tbl_config";
$carousel = mysql_query($query_carousel, $condb) or die(mysql_error());
$row_carousel = mysql_fetch_assoc($carousel);
$totalRows_carousel = mysql_num_rows($carousel);
?>
<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
    <?php include('datatable.php');?>
    <?php include('menu.php');?>
     <?php include('navbar.php');?>
  </head>
  <body>
  <div class="container">

  	<div class="row">

      <div class="col-md-10">
        <h3 align="center"> เพิ่ม คิว </h3>
        <div class="table">
        <form action="<?php echo $editFormAction; ?>" method="POST" name="carousel" id="carousel" class="form-horizontal">
        	<div class="form-group">
            	<div class="col-sm-3" align="right"> คิว </div>
                <div class="col-sm-7">
                	<input type="text" name="carousel_config" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-3"></div>
                <div class="col-sm-7">
                	<button type="submit" name="save" class="btn btn-primary"> บันทึก </button>
                </div>
             </div>
            <input type="hidden" name="MM_insert" value="carousel">

        </form>
      </div>
      </div>
    </div>
 </div>
  </body>
</html>
<?php
mysql_free_result($carousel);
?>
<?php include('f.php');?>
