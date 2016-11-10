<?php 
session_start();
session_unset($_SESSION['customer_login']);
session_destroy();
header('location:index.php');
?>