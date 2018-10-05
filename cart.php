<?php include 'header.php';


?>


<!-- 
Body Section 
-->
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a> <span class="divider">/</span></li>
      <li class="active">Check Out</li>
    </ul>
    <div class="well well-small">
      <h1>รายการสินค้า</h1>
      <hr class="soften"/>	

      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Product</th>
            <th>Description</th>


            <th>Unit price</th>
            <th>Ems</th>
            <th>Qty </th>
            
            <th>Total</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $total=0;


          if(!empty($_SESSION['shopping_cart']))
          {
            require_once('Connections/condb.php'); 
            foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
            {
              $sql = "select * from tbl_product where p_id=$p_id";
              $query = mysql_query($sql, $condb );
              $row = mysql_fetch_array($query);
              $sum = $row['p_price'] * $p_qty;
              $total += $sum;

              ?>

              <tr>
                <td><img width="100" src="pimg/<?php echo $row['p_img1'];?>" alt=""></td>
                <td><?php echo $row['p_name']; ?><br><?php echo substr($row['p_detial'], 0, 60); ?> ...</td>

                <td><?php echo $row['p_price']; ?></td>
                <td><?php echo $row['p_price']; ?></td>
                <td>

                 <div class="input-append">
                   <button class="btn" type="button"  style="max-width:20px">-</button> <input class="span1" style="max-width:20px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="<?php echo $p_qty; ?>"/><button class="btn" type="button" style="max-width:20px"> + </button><button class="btn btn-danger" type="button"><a href="cart.php?p_id=<?php echo $p_id; ?>&act=remove"><span class="icon-remove"></span></a></button>
                 </div>
               </td>
               <td><?php echo number_format($sum); ?></td>
             </tr>

           <?php } ?>

           <tr>
            <td colspan="5" class="alignR">Total products:	</td>
            <td> $448</td>
          </tr>
          <tr>
            <td colspan="5" class="alignR">Total products:	</td>
            <td class="label label-primary" align="center"><h4> <?php echo number_format($total); ?></h4></td>
          </tr>
        </tbody>
      </table><br/>
    <?php  } ?>


    <a href="products.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
    <a href="order.php" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

  </div>
</div>
</div>

<!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->