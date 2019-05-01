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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['resetpassword'])) {
  $loginUsername=$_POST['mem_username'];
  $email=$_POST['mem_email'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_condb);

  $LoginRS__query=sprintf("SELECT mem_username,mem_password ,mem_email ,active FROM tbl_member WHERE mem_email='$email'  AND active='yes'");

  $LoginRS = mysql_query($LoginRS__query, $condb) or die(mysql_error());

  $objResult = mysql_fetch_array($LoginRS);


  if ($objResult['active'] <> 'yes') {

    echo "<script>";
    echo "alert(' ยังไม่ได้ Active User กรุณาตรวจสอบ Email ที่สมัคร !');";
    echo "window.location ='index.php';";
    echo "</script>";
  }elseif (!$objResult) {

    echo "<script>";
    echo "alert(' Email ไม่ถูกต้อง หรือ ยังไม่ได้ Active User !');";
    echo "window.location ='index.php';";
    echo "</script>";
  }else {

   echo "<script>";
   echo "alert('Password ถูกส่งไปแล้ว กรุณาตรวจสอบ E-mail !');";
   echo "window.location ='index.php'; ";
   echo "</script>";

   $strTo = $email;
   $strSubject = "Your Account information username and password.";
      $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //
      $strMessage .= "Username และ Password สำหรับเข้าสู่ระบบ<br>";
      $strMessage .= "=================================<br>";

      $strMessage .= "Username : ".$objResult["mem_username"]."<br>";
      $strMessage .= "Password : ".$objResult["mem_password"]."<br>";
      $strMessage .= "=================================<br>";

      $flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);


}
    }
   mysql_close();
  ?>