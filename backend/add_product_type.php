<?php require_once('../Connections/condb.php'); ?>
<?php


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
$t_name = $_POST['t_name'];
$t_type = $_POST['t_type'];

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "ptype")) {
  $insertSQL = "INSERT INTO tbl_type (t_name,t_type)VALUES ('$t_name','$t_type')";

  mysql_select_db($database_condb);
  $Result1 = mysql_query($insertSQL, $condb) or die(mysql_error());

  $insertGoTo = "list_product_type.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header("Location: %s", $insertGoTo);
}

mysql_select_db($database_condb);
$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysql_query($query_ptype, $condb) or die(mysql_error());
$row_ptype = mysql_fetch_assoc($ptype);
$totalRows_ptype = mysql_num_rows($ptype);
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
        <h3 align="center"> เพิ่มประเภทสินค้า </h3>
        <div class="table">
          <form action="add_product_type.php" method="POST" name="ptype" id="ptype" class="form-horizontal">
           <div class="form-group">
             <div class="col-sm-3" align="right"> ประเภทสินค้า </div>
             <div class="col-sm-4">
               <input type="text" name="t_name" class="form-control" required>
             </div>
             <br>

             <br>
             <div class="col-sm-3" align="right"> ชื่อย่อ </div>
             <div class="col-sm-4">
              <input type="text" name="t_type" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
           <div class="col-sm-3"></div>
           <div class="col-sm-7">
             <button type="submit" name="save" class="btn btn-primary"> บันทึก </button>
             <a href="list_product_type.php" type="btn" class="btn btn-danger">ยกเลิก</a>
           </div>
         </div>
         <input type="hidden" name="MM_insert" value="ptype">

       </form>
     </div>
   </div>
 </div>
</div>
</body>
</html>
<?php
mysql_free_result($ptype);
?>
<?php include('f.php');?>
