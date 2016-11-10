 <?php 
     session_start();
	 if(!isset($_SESSION['customer_login']))
     {
	  header("location:index.php?request=yes");
     }
	 else
	 {
		
		$desctiption=$_REQUEST['description'];
        $suggestion=$_REQUEST['suggestion'];
		$cust_id=$_SESSION['customer_login'];
		$type="customer";
	    $feedback_date=date('Y-m-d');
		$feedback_time=date('h:i:s');
		$feedback_ip=$_SERVER['REMOTE_ADDR'];
		
		mysql_connect("localhost","root","");
		mysql_select_db("desifoodkart");
		
		mysql_query("insert  into feedback (cust_id,emp_id,type,description,suggestion,feedback_date,feedback_time,feedback_ip)
		VALUES ('$cust_id',0,'$type', '$desctiption','$suggestion','$feedback_date','$feedback_time','$feedback_ip')");
		 header('location:index.php');
	 }
 
 ?>
 
 