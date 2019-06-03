<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>
  <?php include('datatable.php');?>
  <span id="hp">
    <?php include('menu.php');?>
  </span>
</head>
<body>
  <?php include('navbar.php');?>
  <div class="container">



  	<div class="row">

      <div class="col-md-10 " >
        <br />
        <a href="index.php" class="btn btn-danger" id="hp">รอชำระเงิน</a>
        <a href="index.php?act=show-payed1" class="btn btn-success" id="hp">ชำระเงินแล้ว</a>
        <a href="index.php?act=show-post1" class="btn btn-info" id="hp">ส่งของแล้ว</a>
        <a href="index.php?act=show-cancel1" class="btn btn-danger" id="hp">ยกเลิกคำสั่งซื้อ</a>
        <br />
        <br />
        <?php
        if ($act =='show-order') {
          include('detail_order_after_cartdone.php');
        }elseif ($act == 'show-payed1'){
          include('show_cart_pay1.php');
        }elseif ($act == 'show-post1') {
          include('show_cart_post.php');
        }elseif ($act == 'show-cancel'){
          include('show_cancel_cart1.php');
        }else{
          include('show_new_cart1.php');
        }


        ?>
      </div>
    </div>
  </div>
</body>
</html>
<?php include('f.php');?>
