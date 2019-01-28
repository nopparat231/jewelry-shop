
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
$t_id = $_GET['t_id'];


mysql_select_db($database_condb);


$query_prd = sprintf("
  SELECT * FROM tbl_product as p, tbl_type as t
  WHERE p.t_id = t.t_id and t.t_id = p.t_id order by p.p_qty asc");


$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
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

      <?php
      mysql_select_db($database_condb);
      $query_view = "SELECT p_qty , p_name FROM tbl_product";
      $view = mysql_query($query_view, $condb) or die(mysql_error());
      $row_view = mysql_fetch_assoc($view);
      $totalRows_view = mysql_num_rows($view);


      ?>

      <style type="text/css">

      th { white-space: nowrap; }
    </style>
    <h3 align="center"> รายงานสินค้าทั้งหมด  </h3>
    <!-- Example split danger button -->
 
    <table width="100%" border="0" cellspacing="0" class="display" id="example">

      <thead>
        <tr>

          <th width="5%">ลำดับที่</th>
          <th width="15%">ประเภท</th>
          <th width="25%">ชื่อสินค้า</th>
          <th width="7%">จำนวน</th>
          <th width="5%">ไซส์</th>
          <th width="5%">ค่าจัดส่ง</th>
          <th width="5%">การเข้าชม</th>
          <th width="7%">ราคา</th>

        </tr>
      </thead>
      <tbody>
        <?php if($totalRows_prd>0){?>

          <?php 
          $i = 1;

          do { ?>
            <?php 
            $c = 'black';
            if ($row_prd['p_qty'] < 4):
             $c = 'red';
           endif ?>
           <tr>
            <td align="center" valign="top">
              <font color="<?php echo $c; ?>"><?php echo $i; ?></font></td>
              <td valign="top">
                <font color="<?php echo $c; ?>"><?php echo $row_prd['t_name']; ?></font></td>
                <td valign="top">
                  <font color="<?php echo $c; ?>"><?php echo $row_prd['p_name']; ?></font>
                </td>

                <td align="center" valign="top">
                  <font color="<?php echo $c; ?>">
                   <?php echo $row_prd['p_qty']; ?></font>
                   <font color="<?php echo $c; ?>">
                     <?php echo $row_prd['p_unit'];?></font>
                   </td>
                   <td align="center" valign="top">
                    <font color="<?php echo $c; ?>">
                      <?php echo $row_prd['p_size'];?></font>
                    </td>
                    <td align="center" valign="top">
                      <font color="<?php echo $c; ?>">
                        <?php echo $row_prd['p_ems'];?></font>
                      </td>
                      <td align="center" valign="top">
                        <font color="<?php echo $c; ?>">
                          <?php echo $row_prd['p_view'];?></font>
                        </td>
                        <td align="right" valign="top">

                          <?php echo number_format($row_prd['p_price'],2); ?></td>
                        </tr>
                        <?php
                        $i += 1;
                      } while ($row_prd = mysql_fetch_assoc($prd)); ?>
                    <?php } ?>
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
        mysql_free_result($prd);
        mysql_free_result($view);

        ?>
        <?php include('f.php');?>
