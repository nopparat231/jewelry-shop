<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$admin_id = $_GET['admin_id'];



$sql ="DELETE FROM tbl_admin WHERE admin_id=$admin_id";

		$result = mysql_query( $sql,$condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "window.location ='list_admin.php'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_admin.php'; ";
			echo "</script>";
		}



?>
