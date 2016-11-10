 <!-- Header -->
 <?php
     if(isset($_REQUEST['cancellation']))
	 {
		 echo "<script> alert('Order Cancelled Successfully')</script>";
	 }
 ?>
 <?php 
     session_start();
	 if(!isset($_SESSION['customer_login']))
     {
	  header("location:index.php?request=yes");
     }
 
 ?>
    <?php  include("include/Header.php"); ?>
   
   <?php
   
    mysql_connect("localhost","root","");
	mysql_select_db("desifoodkart");
	$cust_id=$_SESSION['customer_login'];
	$result=mysql_query("select O.order_id,P.prod_name, O.price,O.order_date,O.pay_status from order_info O , product_info P WHERE
	 O.cust_id='$cust_id' AND P.prod_id = O.prod_id ORDER BY order_date DESC");
	 while($row=mysql_fetch_array($result))
	 {
		 
	 }
	 
   
   ?>

   <body >
   
 
    
 <!-- Page Content -->
 <div class="container">
    
      
     <div class=" container"  style="margin-top:20px; height:auto; background:white; border-radius:10px">
     <!--My Order list -->
     
         <div class="row">
         
           <div class="col-lg-12" style="  margin-top:40px; height:auto">
                       <h3>Order List</h3>
                         <hr />
                         <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Order ID</th>
                              <th>Food Name</th>
                              <th>Order Date</th>
                              <th>Amount</th>
                              <th>Total Item</th>
                              <th>Delivery Status</th>

                              
                              
                             </tr>
                           </thead>
                           
               <tbody>
           
               <?php
   
               mysql_connect("localhost","root","");
	           mysql_select_db("desifoodkart");
	           $cust_id=$_SESSION['customer_login'];
               $s_no=1;
	           $result=mysql_query("select O.id, O.order_id,O.order_cancellation,P.prod_name,P.prod_deal,
			    O.price,O.order_date,O.total_item,O.pay_status from order_info O , 
			   product_info P WHERE
	           O.cust_id='$cust_id' AND P.prod_id = O.prod_id ORDER BY order_date DESC");
	           while($row=mysql_fetch_array($result))
	           {
				   
				  echo "<tr>";
		            echo "<td>$s_no</td>";
					echo "<td>" .$row['order_id']." </td>";
					echo "<td>" .$row['prod_name']." </td>";
					echo "<td>" .$row['order_date']." </td>";
					echo "<td>" .$row['price']."</td>";
					echo "<td>" .$row['total_item']."&nbsp;(".$row['prod_deal'].") </td>";
                    if($row['pay_status']=="YES")
					   {
						  echo "<td>Delivered</td>";

					   }
					else
					   {
						   if($row['order_cancellation']=="YES")
						   {
							 echo "<td>Order Cancelled</td>";
   
						   }
						   else
						   {
						   $id=$row['id'];
						   echo "<td>";
						        echo "<a href='cancelorder.php?id=$id' class='btn btn-success'>Cancel Order</a>";
						   echo "</td>";
						   }
					   }
			      echo "</tr>";
				  $s_no+=1;

	           }
	 
   
              ?>
              </tbody>
              
            </table>
          </div>  
           </div>
     
     
        </div>
       
    </div>  
         

 </div>
 <!-- /.container -->
 <?php  include("include/footer.php");?>

    <!-- jQuery -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script> 
</body>

</html>
