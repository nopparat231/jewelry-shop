

<?php 
$qty = $row_prd['p_qty'];
if($qty <= 0){ ?>

   <div class="caption cntr" >
        <p><?php echo $row_prd['p_name']; ?></p>
        <p><strong><?php echo number_format($row_prd['p_price'],2); ?> บาท</strong></p>
        <h4><a class="shopBtn" href="cart.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" dissable title="add to cart"> สินค้าหมด </a></h4>
        
        <br class="clr">
    </div>


   <p dissable class="button btn2" >
    <font color="#CC7E6D" > <span class="glyphicon glyphicon-shopping-cart" ></span>สินค้าหมด</font></p>


<?php }else{
    ?>


    <div class="caption cntr">
        <p><?php echo $row_prd['p_name']; ?></p>
        <p><strong><?php echo number_format($row_prd['p_price'],2); ?> บาท</strong></p>
        <h4><a class="shopBtn" href="cart.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" title="add to cart"><span class="totalInCart" ></span> เพิ่มลงตระกล้า </a></h4>
        
        <br class="clr">
    </div>


        <?php } ?>