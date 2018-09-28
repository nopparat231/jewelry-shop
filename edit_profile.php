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



$colname_editmem = "-1";
if (isset($_GET['mem_id'])) {
  $colname_editmem = $_GET['mem_id'];

}
mysql_select_db($database_condb);
$query_editmem = sprintf("SELECT * FROM tbl_member WHERE mem_id = %s", GetSQLValueString($colname_editmem, "int"));
$editmem = mysql_query($query_editmem, $condb) or die(mysql_error());
$row_editmem = mysql_fetch_assoc($editmem);
$totalRows_editmem = mysql_num_rows($editmem);


?>

<div class="span9">
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li class="active">Edit Profile</li>
  </ul>

  <div class="well">

    <h3 align="center">  แก้ไข ข้อมูลส่วนตัว  <?php include('edit_ok.php');?> </h3>

    <form class="form-horizontal" name="editmem" action="edit_profile_db.php?" method="POST" id="editmem">
<input type="hidden" name="mem_id" hidden value="<?php echo $row_editmem['mem_id']; ?>">

      <div class="control-group">
        <label class="control-label" for="mem_username">Username : <sup>*</sup></label>
        <div class="controls">
          <input type="text" name="mem_name" required placeholder="ชื่อ - สกุล" disabled="disabled" value="<?php echo $row_editmem['mem_name']; ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="mem_password">Password : <sup>*</sup></label>
        <div class="controls">
          <input type="password" id="txtNewPassword" name="mem_password"  required placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="6" value="<?php echo $row_editmem['mem_password']; ?>" >
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="mem_name">ชื่อ - สกุล : <sup>*</sup></label>
        <div class="controls">
          <input type="text" name="mem_name" required placeholder="ชื่อ - สกุล"  value="<?php echo $row_editmem['mem_username']; ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="mem_address">ที่อยู่ : <sup>*</sup></label>
        <div class="controls">
          <textarea type="textarea" name="mem_address" required placeholder="ที่อยู่"><?php echo $row_editmem['mem_address']; ?> </textarea> 
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="mem_tel">เบอร์ โทร : <sup>*</sup></label>
        <div class="controls">
          <input type="textarea" name="mem_tel" required placeholder="0912345678" pattern="[0-9]{10}" minlength="2" title="เบอร์โทร 0-9" minlength="10" value="<?php echo $row_editmem['mem_tel']; ?>">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
        <div class="controls">
          <input type="text" name="mem_email" required placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="กรุณากรอก Email ให้ถูกต้อง" minlength="10"  value="<?php echo $row_editmem['mem_email']; ?>" >
        </div>
      </div>    
      <div class="control-group">
        <div class="controls">
         <input type="submit" name="submitAccount" value="แก้ไข" class="exclusive shopBtn">
       </div>
     </div>
   </form>

 </div>



</div>



<?php
mysql_free_result($editmem);

// include('f.php');?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

