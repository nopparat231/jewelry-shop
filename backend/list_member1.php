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

mysql_select_db($database_condb);
$query_mem = "SELECT * FROM tbl_member ORDER BY mem_id ASC";
$mem = mysql_query($query_mem, $condb) or die(mysql_error());
$row_mem = mysql_fetch_assoc($mem);
$totalRows_mem = mysql_num_rows($mem);
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
        <h3 align="center"> รายงานข้อมูลสมาชิก   </h3>
        <div class="table">
          <table id="example" class="display" cellspacing="0" border="1">
		<thead>
            <tr align="center">
              <th width="5%">รหัส</th>
              <th width="10%">ข้อมูล</th>
              <th width="15%">ที่อยู่</th>
              <th width="5%">วันที่สมัคร</th>

              <th width="5%">ลบ</th>
            </tr>
        </thead>
            <?php do { ?>
              <tr>
                <td align="center"><?php echo $row_mem['mem_id']; ?></td>
                <td><?php echo "ชื่อ : ",$row_mem['mem_name']; ?><br />
                <?php echo "User : ",$row_mem['mem_username']; ?><br />

                <td><?php echo "ที่อยู่ : " ,$row_mem['mem_address']; ?><br />
                  <?php echo "เบอร์โทร : " ,$row_mem['mem_tel']; ?><br />
                  <?php echo "E-mail : " ,$row_mem['mem_email']; ?>
                </td>
                <td><?php echo $row_mem['dateinsert']; ?></td>

                <td><center> <a href="del_mem.php?mem_id=<?php echo $row_mem['mem_id'];?>" onClick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-xs"> ลบ </a> </center> </td>
              </tr>
              <?php } while ($row_mem = mysql_fetch_assoc($mem)); ?>
          </table>
          <div class="col-md-2">
                        <input type="button" name="search" id="hp" value="พิมพ์" onclick="print()" class="btn btn-info" />
                      </div>
        </div>
        </div>
    </div>
 </div>
  </body>
</html>
<?php
mysql_free_result($mem);
?>
<?php // include('f.php');?>
