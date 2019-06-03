<?php
session_start();
unset($_SESSION['MM_Admin']);
unset($_SESSION['MM_AdminGroup']);
//session_destroy();
header("Location: ./admin/ ");	
?>