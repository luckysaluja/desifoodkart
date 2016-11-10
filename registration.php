<?php

$cust_name=$_REQUEST['cust_name'];
$cust_email=$_REQUEST['cust_email'];
$cust_password=md5($_REQUEST['cust_password']);
$cust_address=$_REQUEST['cust_address'];
$cust_phone=$_REQUEST['cust_phone'];
$cust_pincode=$_REQUEST['cust_pincode'];
$cust_term_condition="ACTIVE";
$cust_date=date('Y-m-d');
$cust_time=date('h:i:s');
$cust_ip=$_SERVER['REMOTE_ADDR'];


mysql_connect("localhost","root","");
mysql_select_db("desifoodkart");
$present=0;

$result=mysql_query("select cust_email from customer_info WHERE cust_email='$cust_email'");

while($row=mysql_fetch_array($result))
{
	$present=1;
}
if($present==1)
{
header("location:registration_form.php?already=yes");	
}

else

{
	
	$insert=mysql_query("insert into customer_info (cust_name,cust_email,cust_phone,cust_address,
	cust_password,cust_term_condition,cust_pincode,cust_date,cust_time,cust_ip) VALUES ('$cust_name','$cust_email','$cust_phone','$cust_address','$cust_password','$cust_term_condition','$cust_pincode','$cust_date','$cust_time','$cust_ip')");
	header("location:index.php?register=yes");	

	
	
}


?>