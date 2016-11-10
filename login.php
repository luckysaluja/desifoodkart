<?php
    mysql_connect("localhost","root","");
	mysql_select_db("desifoodkart");
    $cust_email=$_REQUEST['cust_email'];
	$cust_password=$_REQUEST['cust_password'];
	$cust_password=md5($cust_password);
	session_start();
    //echo $cust_email;
	//echo $cust_password;
     $result=mysql_query("select * from customer_info WHERE cust_email='$cust_email' AND cust_password='$cust_password'");
    
	 while($row=mysql_fetch_array($result))
	    {
		  $_SESSION['customer_login']=$row['cust_id'];	
		   header('location:index.php'); 
		}
	 if(!isset($_SESSION['customer_login']))
	 {	
     header('location:index.php?error=Invalid Login...?');
	 }

?>