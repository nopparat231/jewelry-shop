<?php include 'header.php';
require_once('Connections/condb.php'); ?>
<?php
//error_reporting( error_reporting() & ~E_NOTICE );
session_start();
// print_r($_SESSION);
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
//session_start();
$colname_buyer = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_buyer = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_buyer = sprintf("SELECT * FROM tbl_member WHERE mem_username = %s", GetSQLValueString($colname_buyer, "text"));
$buyer = mysql_query($query_buyer, $condb) or die(mysql_error());
$row_buyer = mysql_fetch_assoc($buyer);
$totalRows_buyer = mysql_num_rows($buyer);
  //echo 'ss'.$row_buyer;
if($_SESSION['MM_Username']!=''){  ?>


<!--
Body Section
-->
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
      <li><a href="index.php">หน้าแรก</a> <span class="divider">/</span></li>
      <li class="active">ชำระเงิน</li>
    </ul>
    <div class="well well-small">
      <h1>ยืนยันการสั่งซื้อ <small class="pull-right"></small></h1>
      <hr class="soften"/>

      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>สินค้า</th>

            <th>ราคาต่อหน่วย</th>
            <th>ขนาด </th>
            
            <th>จำนวน </th>
            <th>คาจัดส่ง</th>
            <th>ราคารวม</th>

          </tr>

        </thead>
        <tbody>
          <form  name="formlogin" action="saveorder.php" method="POST" id="login" class="form-horizontal">
            <?php
            require_once('Connections/condb.php');
            $total = 0;
            if ($totalRows_buyer > 0 ) {

              foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
              {
                $sql = "select * from tbl_product where p_id=$p_id";
                $query = mysql_query($sql,$condb);
                $row  = mysql_fetch_array($query);
                $sum  = $row['p_price']*$p_qty;
                $totalp += $sum;
                $total += $sum;

                // $ems = $row['p_ems'] * $p_qty;
                // $total += $ems;

                // $sumems +=$ems;
                $sumems = $total*15/100; 
                $total += $sumems;
                $sumemsall +=$sumems;


                ?>

                <tr>
                  <td><?php echo $row['p_name'];?></td>
                  <td><?php echo number_format($row['p_price'],2); ?></td>
                  <td><?php echo $row['p_size']; ?></td>
                  
                  <td>
                   <?php echo $p_qty; ?>
                 </td>
                 <td><?php echo number_format($sumems,2); ?></td>
                 <td><?php echo number_format($sum,2); ?></td>
               </tr>

             <?php }

             $tax = $total * 0.07;
             $total += $tax;

             ?>

             <tr>
              <td colspan="5" class="alignR">ราคาสินค้า:  </td>
              <td ><?php echo number_format($totalp,2); ?></td>
            </tr>
            <tr>
              <td colspan="5" class="alignR">ค่าจัดส่ง  </td>
              <td> <?php echo number_format($sumemsall,2); ?></td>
            </tr>
            <tr>
              <td colspan="5" class="alignR">ภาษ๊ 7%  </td>
              <td> <?php echo number_format($tax,2); ?></td>
            </tr>
            <tr>
              <td colspan="5" class="alignR">ราคารวม :  </td>
              <td class="label label-primary" align="center"><h4> <?php echo number_format($total,2); ?></h4></td>
            </tr>

          </tbody>
        </table><br/>
      <?php  } ?>

      <table class="table table-bordered">
       <tbody>
        <tr><td ><h2>ที่อยู่ในการจัดส่ง</h2></td></tr>
        <tr>
         <td>

           <div class="control-group">
            <label class="span2 control-label" >ขื่อ - นามสกุล</label>
            <div class="controls">
              <input type="text" name="name" value="<?php echo $row_buyer['mem_name']; ?>" required placeholder="ชื่อ-สกุล">
            </div>
          </div>

          <div class="control-group">
            <label class="span2 control-label" >ที่อยู่</label>
            <div class="controls">
              <textarea name="address" class="form-control"  required placeholder="ที่อยู่ในการส่งสินค้า"><?php echo $row_buyer['mem_address']; ?></textarea>
            </div>
          </div>

          <div class="control-group">
            <label class="span2 control-label" >เบอร์โทร</label>
            <div class="controls">
              <input type="text"  name="phone" value="<?php echo $row_buyer['mem_tel']; ?>" placeholder="เบอร์โทรศัพท์">
            </div>
          </div>

          <div class="control-group">
            <label class="span2 control-label" >อีเมล์</label>
            <div class="controls">
              <input type="text" name="email" value="<?php echo $row_buyer['mem_email']; ?>" required placeholder="อีเมล์" >
            </div>
          </div>


          <input name="mem_id" type="hidden" id="mem_id" value="<?php echo $row_buyer['mem_id']; ?>" >



          <div class="span7 control-group">
            <label class="span2 control-label" ></label>
            <div class="controls">
              <button type="submit" class="shopBtn">ยืนยันสั่งซื้อ</button>
            </div>
          </div>
        </form>
      </td>
    </tr>
  </tbody>
</table>
<a href="cart.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> ย้อนกลับ </a>


</div>
</div>
</div>
<?php

} else{
  include('logout3.php');
 }//end seseion

 mysql_free_result($buyer);
 ?>
<!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->
