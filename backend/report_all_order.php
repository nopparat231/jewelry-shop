<?php require_once('../Connections/condb.php'); ?>
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


$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
if ($start_date != '') {
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
}elseif ($start_date == '') {
  $start_date = '2012-01-01';
  $end_date = date('Y/m/d');
}else {
  $start_date = '2012-01-01';
  $end_date = date('Y/m/d');
}

$colname_mm = "-1";
if (isset($_SESSION['MM_Admin'])) {
  $colname_mm = $_SESSION['MM_Admin'];
}
// echo $colname_mm;
mysql_select_db($database_condb);
$query_mm = sprintf("SELECT * FROM tbl_member WHERE mem_username = %s", GetSQLValueString($colname_mm, "text"));
$mm = mysql_query($query_mm, $condb) or die(mysql_error());
$row_mm = mysql_fetch_assoc($mm);
$totalRows_mm = mysql_num_rows($mm);

$mem_id = $row_mm['mem_id'];

mysql_select_db($database_condb);
$query_mycart = sprintf("SELECT o.order_id as oid, o.mem_id, o.order_status, o.order_date, o.name , d.order_id , count(d.order_id) as coid FROM tbl_order as o, tbl_order_detail as d WHERE o.order_id = d.order_id and o.order_date >= '$start_date' and o.order_date <= '$end_date' GROUP BY o.order_id ORDER BY o.order_id DESC " , GetSQLValueString($colname_mycart , "int"));
$mycart = mysql_query($query_mycart , $condb) or die(mysql_error());
$row_mycart = mysql_fetch_assoc($mycart);
$totalRows_mycart = mysql_num_rows($mycart);

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
  </head>
  <body>
   <?php include('navbar.php');?>
  <div class="container">

     
     <div class="row">
      

      <div class="col-md-10">
       


      <h3 align="center">รายงานการสั่งซื้อ</h3>


  <table id="example" class="display"  border="0">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>รหัสสั่งซื้อ</th>
        <th>ลูกค้า</th>
        <th>รายการ</th>

        <th>สถานะ</th>
        
        <th>วันที่ทำรายการ</th>
        
        <th>ราคาขาย</th>
       
      </tr>
    </thead>
    <tbody>
      <?php if ($totalRows_mycart > 0) { ?>
        <?php 
        $i = 1;
        do { ?>
          <tr>
            <td align="center" valign="top"><?php echo $i; ?></td>
            <td align="center">
              PR<?php echo $row_mycart['oid'];?>
            </td>
            <td align="center" >
              <?php echo $row_mycart['name'];?>
            </td>

            <td align="center" >
              <?php echo $row_mycart['coid'];?>
            </td>

            <td align="center" >
              <font color="red">
                <?php $status = $row_mycart['order_status'];
                include('status.php');
                ?>
              </font>
            </td>

            <td align="center">
             <?php echo date("d-m-Y",strtotime($row_mycart['order_date']));?></td>
            
            <td align="center">
              <?php echo number_format($row_mycart['ctotal'],2);?>
            </td>
           
          </tr>
          <?php 
          $i += 1;
        } while ($row_mycart = mysql_fetch_assoc($mycart)); ?>
      </tbody>
      <tfoot>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

          
          
        </tr>
      </tfoot>
    </table>
    <div class="col-md-2">
                  <input type="button" name="search" id="hp" value="พิมพ์" onclick="print()" class="btn btn-info" />
                </div>
  </div>
</div>
</div>
</body>
</html>
<?php
}
mysql_free_result($mycart);

?>
