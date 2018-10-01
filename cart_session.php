
<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
@session_start();

$p_id = $_GET['p_id'];
$act = $_GET['act'];


if($act == 'add' && !empty($p_id))
{
  if(!isset($_SESSION['shopping_cart']))
  {
    $_SESSION['shopping_cart'] = array();
  }else{

  }
  if(isset($_SESSION['shopping_cart'][$p_id]))
  {

    $_SESSION['shopping_cart'][$p_id]++;

  }else{
    $_SESSION['shopping_cart'][$p_id]=1;
  }

}


if($act == 'remove' && !empty($p_id))
{
  unset($_SESSION['shopping_cart'][$p_id]);
}

if($act == 'update')
{
  $amount_array = $_POST['amount'];
  foreach($amount_array as $p_id => $amount)
  {
    $_SESSION['shopping_cart'][$p_id] = $amount;
  }
}


?>
