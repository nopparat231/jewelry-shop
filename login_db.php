<?php 
if (!isset($_SESSION)) {
  session_start();

}

 ?>
<?php require_once('Connections/condb.php'); ?>

<?php
// *** Validate request to login to this site.


$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['mem_username'])) {
  $loginUsername=$_POST['mem_username'];
  $password=$_POST['mem_password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "cart.php";
  $MM_redirectLoginFailed = "login_alert.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_condb);

  $LoginRS__query="SELECT mem_username, mem_password FROM tbl_member WHERE mem_username='$loginUsername' AND mem_password='$password' AND active='yes'";

  $LoginRS = mysql_query($LoginRS__query, $condb) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
   $loginStrGroup = "";

   if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
   $_SESSION['MM_Username'] = $loginUsername;
   $_SESSION['MM_UserGroup'] = $loginStrGroup;

   if (isset($_SESSION['PrevUrl']) && false) {
    $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];
  }
  echo "<script>";
  echo "window.location ='index.php'; ";
  echo "</script>";
}
else {

  echo "<script>";
  echo "alert('Username หรือ Password ผิด กรุณาLoginอีกครั้ง !');";
  echo "window.location ='index.php'; ";
  echo "</script>";

}
}
?>