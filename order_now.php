 <?php  session_start();
if(!isset($_SESSION['customer_login']))
  {
	  header("location:index.php?request=yes");
  }
	  
?>	  
   <!-- Header -->
    <?php  include("include/Header.php"); ?>
    <?php
	$prod_id=$_REQUEST['prod_id'];
	if(!isset($prod_id))
	{
		header('location:index.php');
	}
	mysql_connect("localhost","root","");
	mysql_select_db("desifoodkart");
	$prod_result=mysql_query("select * from product_info WHERE prod_id='$prod_id'");
	 while($prod_row=mysql_fetch_array($prod_result))
	          {
				  $prod_name=$prod_row['prod_name'];
	              $prod_image=$prod_row['prod_image'];
				  $prod_category=$prod_row['prod_category'];
				  $prod_price=$prod_row['prod_price'];
				  $prod_deal=$prod_row['prod_deal'];
				  $img_src="admin/resources/product_image/".$prod_row['prod_image'];
	          }
	?>
    <?php
	  if(isset($_SESSION['customer_login']))
	  {
		    $cust_id=$_SESSION['customer_login'];
	    	$cust_result=mysql_query("select * from customer_info WHERE cust_id='$cust_id'");
             	 while($cust_row=mysql_fetch_array($cust_result))
				 {
					 $cust_name=$cust_row['cust_name'];
					 $cust_email=$cust_row['cust_email'];
					 $cust_phone=$cust_row['cust_phone'];
					 $cust_address=$cust_row['cust_address'];
					 $cust_pincode=$cust_row['cust_pincode'];
					 
				 }

	  
	  }
	
	?>
   <body onLoad="calculatePrice(<?php echo $prod_price?>,1)">
   
    
    <!-- Page Content -->
  
    <form method="post" action="placeorder.php">
      
     <div class=" container"  style="margin-top:60px; height:auto; background:white; border-radius:10px; ">
       <div class="row" >
          <div class="col-lg-2"></div>
          <div class="col-lg-8" style=" box-shadow:0px 0px 6px  #DFDFDF ; height:250px; border-radius:10px;
          background-image:url(resources/image/tech.jpg)">
             <div class="col-lg-6" style="height:250px;">
                <img src="<?php echo $img_src ?>" 
                 style="height:210px; width:210px; margin-top:20px; margin-bottom:20px; border-radius:10px">
             </div>
             
             <div class="col-lg-6" style="color:#500">
             <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>">
              <input type="hidden" name="prod_name" value="<?php echo $prod_name; ?>">

               <div class="col-lg-12" style="margin-top:50px"><?php echo $prod_name; ?></div>
               <div class="col-lg-12" style="margin-top:20px"><?php echo $prod_category; ?></div>
               <div class="col-lg-12" style="margin-top:20px"><h4>Rs.</h4>
               <h5><?php echo $prod_price."&nbsp;&nbsp;(".$prod_deal.")"; ?></h5></div>


             
             </div>
          </div>
          <div class="col-lg-2"></div>

       </div>
       <div class="row" style="margin-top:10px;">
          <div class="col-lg-2"></div>
          <div class="col-lg-8" style=" box-shadow:0px 0px 6px  #DFDFDF ; height:auto; border-radius:10px;
          background-image:url(resources/image/tech.jpg); color:#500">
          
          
          <div class="col-lg-12" style="background:white; color:blue; margin-top:20px"> Delivery Address</div>
          <input type="hidden" name="cust_id" value="<?php echo $cust_id;?>">
          
          <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer'S Name</div>
          <div class="col-lg-6" style="margin-top:20px">Mr.<?php echo $cust_name;?></div>
          
           <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail Address</div>
          <div class="col-lg-6" style="margin-top:20px"><?php echo $cust_email;?></div>
          
           <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal Address</div>
          <div class="col-lg-6" style="margin-top:20px"><?php echo $cust_address;?></div>
          
           <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pincode</div>
          <div class="col-lg-6" style="margin-top:20px"><?php echo $cust_pincode;?></div>
          
           <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No.</div>
          <div class="col-lg-6" style="margin-top:20px"><?php echo $cust_phone;?></div>
          
           <div class="col-lg-12" style="background:white; color:blue; margin-top:20px"> Order Details</div>
         
          <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Item</div>
          <div class="col-lg-6" style="margin-top:20px"><input type="number" class="form-control"
           style="width:100px" name="total_item" value="1" 
            id="totalitem" onChange="calculatePrice(<?php echo $prod_price?>,this.value)"></div>


          <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Amount</div>
          <div class="col-lg-6" style="margin-top:20px">Rs.&nbsp;
          <input type="text" name="price" readonly style="border:none; background:none" 
          value="" id="price">
          </div>
          
          <div class="col-lg-6" style=" margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment </div>
          <div class="col-lg-6" style="margin-top:20px">
          <select name="pay_mode">
              <option>COD</option>
          
          </select>
          </div>
         
           <div class="col-lg-12" style=" text-align:center; margin-top:20px; margin-bottom:20px">
           <input type="submit" value="Place Order" class="btn btn-info">
           </div>



             
          </div>
          <div class="col-lg-2"></div>

       </div>
    </div>  
         

    <!-- /.container -->
 <?php  include("include/footer.php");?>
</form>
   
</body>

</html>
