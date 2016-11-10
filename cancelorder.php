 <?php  session_start();
if(!isset($_SESSION['customer_login']))
  {
	  header("location:index.php?request=yes");
  }
else
  {
	mysql_connect("localhost","root","");
	mysql_select_db("desifoodkart");  
	$id=$_REQUEST['id'];
	mysql_query("update order_info SET order_cancellation='YES' WHERE id='$id'");
	header("location:myorder.php?cancellation=yes");
  }
?>	

