<?php include 'header.php';


?>


<!--
Body Section
-->
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
      <li><a href="index.php">หน้าแรก</a> <span class="divider">/</span></li>
      <li class="active">ตะกร้าสินค้า</li>
    </ul>
    <div class="well well-small">
      <h1>รายการสินค้า</h1>
      <hr class="soften"/>

      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>สินค้า</th>
            <th>รายละเอียด</th>


            <th>ราคาต่อหน่วย</th>
            <th>ขนาด </th>
            <th>ค่าจัดส่ง</th>
            <th>จำนวนสินค้า </th>

            <th>ราคา</th>
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

              $sqlc = "select * from tbl_product where p_id=$p_id";
              $queryc = mysql_query($sqlc, $condb );
              $rowc = mysql_fetch_array($queryc);
              $sum = $rowc['p_price'] * $p_qty;
              $totalp += $sum;
              $total += $sum;

              $ems = $rowc['p_ems'] * $p_qty;
              $total += $ems;

              $sumems +=$ems;
              ?>


              <tr>
                <td><img width="100" src="pimg/<?php echo $rowc['p_img1'];?>" alt=""></td>
                <td><?php echo $rowc['p_name']; ?><br>
                  สินค้าคงเหลือ <?php echo $rowc['p_qty']; ?> ชิ้น</td>

                  <td><?php echo number_format($rowc['p_price'],2); ?></td>
                  <td><?php echo $rowc['p_size']; ?></td>
                  <td><?php echo $rowc['p_ems']; ?></td>
                  <td>

                   <div class="input-append">
                    <form action="cart.php?act=update" method="post">

                      <a class="btn" type="button" style="max-width:20px" href="cart.php?p_id=<?php echo $rowc['p_id'];?>&act=rem">-</a>


                      <input class="span1" style="max-width:20px" placeholder="1" id="appendedInputButtons" size="16" type="text" name='amount[<?php echo $rowc['p_id'];?>]' value="<?php echo $p_qty; ?>" onkeyup="if(this.value > <?php echo $rowc['p_qty']; ?>) this.value = <?php echo $rowc['p_qty']; ?>;" />

                      <?php if ($p_qty >= $rowc['p_qty']) { ?>
                        <a class="btn" type="button" disabled="disabled" style="max-width:20px" href="#" >+</a>
                      <?php }else{ ?>
                       <a class="btn" type="button" style="max-width:20px" href="cart.php?p_id=<?php echo $rowc['p_id'];?>&act=add" >+</a>

                       <?php
                     }


                     ?>


                     <button class="btn btn-danger" type="button"><a href="cart.php?p_id=<?php echo $p_id; ?>&act=remove"><span class="icon-remove"></span></a></button>

                   </div>
                 </td>
                 <td><?php echo number_format($sum,2); ?></td>
               </tr>


             <?php }


             $tax = $total * 0.07;
             $total += $tax;


             ?>



             <tr>
              <td colspan="6" class="alignR">ราคาสินค้า:  </td>
              <td ><?php echo number_format($totalp,2); ?></td>
            </tr>
            <tr>
              <td colspan="6" class="alignR">ค่าจัดส่ง	</td>
              <td> <?php echo number_format($sumems,2); ?></td>
            </tr>
            <tr>
              <td colspan="6" class="alignR">ภาษี 9%  </td>
              <td> <?php echo number_format($tax,2); ?></td>
            </tr>
            <tr>
              <td colspan="6" class="alignR">ราคารวม :	</td>
              <td class="label label-primary" align="center"><h4> <?php echo number_format($total,2); ?></h4></td>
            </tr>
          </tbody>
        </table><br/>
      <?php  } ?>


      <a href="products.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> กลับไปหน้าสินค้า </a>
      <button  class="shopBtn btn-large pull-right">ถัดไป <span class="icon-arrow-right"></span></button>

    </form>

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
