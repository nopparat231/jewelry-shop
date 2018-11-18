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
$q = $_GET['q'];
mysql_select_db($database_condb);
$query_prdq = "SELECT * FROM tbl_product WHERE p_name LIKE '%$q%' OR  p_detial LIKE '%$q%'  ORDER BY p_id ASC";
$prdq = mysql_query($query_prdq, $condb) or die(mysql_error());
$row_prdq = mysql_fetch_assoc($prdq);
$totalRows_prdq = mysql_num_rows($prdq);
?>


<?php include 'header.php';?>
<!-- 
Body Section 
-->
<div class="row">
  <!-- sidebar -->
  <?php include 'sidebar.php';?>
  <!-- end sidebar -->



  <!-- -------------Show Product----------------->
  <div class="span9">

    <div class="well well-small">
      
      <!-- <div class="row"> -->
        <div class="row-fluid">

          <ul class="thumbnails">

            <?php if ($totalRows_prdq > 0) {?> <!-- ตรวจสอบถ้ามีสินค้าในดาต้าเบสมากกว่า 0 ชิ้น ให้แสดงสินค้า -->

            <?php 
            $n = 1;
            do { //วนลูปแสดงสินค้า

            if($n % 3 == 1){ //ตรวจสอบว่าแสดงสินค้าไปแล้วกี่ชิ้น ถ้าแสดงถึงสามชิเนแล้ว ให้แสดง class="row-fluid" 
            echo '<div class="row-fluid">';
          }
          ?>

          <li class="span4">
            <div class="thumbnail">
              <a href="product_details.php?p_id=<?php echo $row_prdq['p_id'];?>" class="overlay"></a>
              <a class="zoomTool" href="product_details.php?p_id=<?php echo $row_prdq['p_id'];?>" title="add to cart"><span class="icon-search"></span> ดูข้อมูลสินค้า</a>
              <a href="product_details.php?p_id=<?php echo $row_prdq['p_id'];?>"><img src="pimg/<?php echo $row_prdq['p_img1'];?>" alt=""></a>
              <?php 
              $qty = $row_prdq['p_qty'];
              if($qty <= 0){ ?>

                <div class="caption cntr" >
                  <p><?php echo $row_prdq['p_name']; ?></p>
                  <p><strong><?php echo number_format($row_prdq['p_price']); ?> บาท</strong></p>
                  <h4><a class="shopBtn" href="cart.php?p_id=<?php echo $row_prdq['p_id'];?>&act=add" dissable title="add to cart"> สินค้าหมด </a></h4>
                  
                  <br class="clr">
                </div>


                <p dissable class="button btn2" >
                  <font color="#CC7E6D" > <span class="glyphicon glyphicon-shopping-cart" ></span>สินค้าหมด</font></p>


                <?php }else{
                  ?>


                  <div class="caption cntr">
                    <p><?php echo $row_prdq['p_name']; ?></p>
                    <p><strong><?php echo number_format($row_prdq['p_price']); ?> บาท</strong></p>
                    <h4><a class="shopBtn" href="cart.php?p_id=<?php echo $row_prdq['p_id'];?>&act=add" title="add to cart"><span class="totalInCart" ></span> เพิ่มลงตระกล้า </a></h4>
                    
                    <br class="clr">
                  </div>


                <?php } ?>
              </div>
            </li>

            <?php
            if($n % 3 == 0){ //ตรวจสอบว่าแสดงสินค้าไปแล้วกี่ชิ้น ถ้าแสดงถึงสามชิเนแล้ว ให้แสดง class="row-fluid" 
            echo '</div><br />';
          }
          $n += 1;

        } while ($row_prdq = mysql_fetch_assoc($prdq)); ?>
      <?php } mysql_free_result($prdq); ?>

    </ul>
  </div>
</div>


</div>
</div>


<!-- --------------End Show Product------------- -->

<!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->