<?php require_once('Connections/condb.php'); ?>
<?php


$colname_pf = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_pf = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_pf = "SELECT * FROM tbl_member WHERE mem_username = '$colname_pf'";
$pf = mysql_query($query_pf, $condb);
$row_pf = mysql_fetch_assoc($pf);
$totalRows_pf = mysql_num_rows($pf);
?>

<?php include 'header.php'; ?>

<?php include('datatable.php'); ?>

<div class="row">


<?php include 'm_manu.php'; ?>
<!-- content -->

<!--  <div class="col-md-8" > -->
  <?php
  $page = isset($_GET['page']);
  $mem_id = isset($_GET['mem_id']);
  

  if ($page == 'mycart') {

   include('mycart.php');

 }elseif ($mem_id != '') {

   include('edit_profile.php');

 } else  {
echo "<div class='span9'>";
  include('detail_order_afer_cartdone.php');
echo "</div>";
} 

?>

</div>
   <!--
Footer
-->
<?php include 'footer.php'; ?>
<!--
End Footer
-->

