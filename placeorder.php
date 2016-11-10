<?php
session_start();
if(isset($_SESSION['customer_login']))
  {
		  
    mysql_connect("localhost","root","");
	mysql_select_db("desifoodkart");

	$prod_name=strtoupper($_REQUEST['prod_name']);	
	$order_id="ID".rand(11111,99999).$prod_name.date('Y-m-d');
	$cust_id=$_REQUEST['cust_id'];
	$prod_id=$_REQUEST['prod_id'];
	$emp_id=0;
	$delivery_time=100;
	$pay_mode=$_REQUEST['pay_mode'];
	$price=$_REQUEST['price'];
	$order_date=date('Y-m-d');
	$order_time=date('h:i:s');
	$order_ip=$_SERVER['REMOTE_ADDR'];
	$order_cancellation="NO";
	$total_item=$_REQUEST['total_item'];
	$order_status="INCOMPLETE";
	$pay_status="NO";
	
	mysql_query("insert into order_info (order_id,cust_id,prod_id,emp_id,delivery_time,pay_mode,price,order_date,order_time,
	order_ip,order_cancellation,total_item,order_status,pay_status) VALUES ('$order_id','$cust_id','$prod_id',
	'$emp_id','$delivery_time','$pay_mode','$price','$order_date','$order_time','$order_ip','$order_cancellation',
	'$total_item','$order_status','$pay_status')");
	
	header('location:index.php?conformation=successfully');
	
	
	
		  
  }
	  
else 
     {
		 header('location:index.php');
     }

?>