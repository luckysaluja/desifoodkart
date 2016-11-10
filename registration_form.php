  <?php
if(isset($_REQUEST['already']))
{
	echo "<script>alert('Already Exist')</script>";
}

?> 
   <!-- Header -->
    <?php  include("include/Header.php"); ?>
   

<body >
   
    <!-- banner -->
    <?php  include("include/banner.php"); ?>
    
    <!-- Page Content -->
<div class="container" style="margin-top:20px">
    
      
     <form method="post" action="registration.php" onSubmit="return validate()">

  <div class="row">
  <div class="col-lg-2"></div>
    <div class="col-lg-8">

	<legend>Personal Information</legend>

	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_name">Name:</label></div>
		<div class="col-lg-6"><input type="text" required name="cust_name" id="cust_name" class="form-control" />	</div>
	</div>

	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_email">Email Address:</label></div>
		<div class="col-lg-6"><input type="email" required name="cust_email" id="cust_email" class="form-control" /></div>
	</div>

	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_password">Password:</label></div>
		<div class="col-lg-6"><input type="password" required name="cust_password" id="cust_password" class="form-control" /></div>
	</div>

	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_password">Confirm Password:</label></div>
		<div class="col-lg-6"><input type="password" required name="cust_re_password" id="cust_re_password" class="form-control" /></div>
	</div>

	<legend>Address Details</legend>

	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_address">Address</label></div>
		<div class="col-lg-6"><input type="text" required name="cust_address" id="cust_address" class="form-control" /></div>
	</div>

	

	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_phone">Contact No.:</label></div>
		<div class="col-lg-6"><input type="tel" required name="cust_phone" id="cust_phone" class="form-control" /></div>
	</div>
	
	<div class="col-lg-12" style="margin-top:10px">
		<div class="col-lg-6"><label for="cust_pincode">Pin code:</label></div>
		<div class="col-lg-6"><input type="text"  required name="cust_pincode" id="cust_pincode" class="form-control" /></div>
	</div>


	<div class="col-lg-12" style="text-align:center; margin-top:20px">
		<input type="submit" name="btnSubmit" id="btnSubmit" value="Sign Up!" class="btn btn-success" />
	</div>
    
    </div>
    
  <div class="col-lg-2"></div>

    
    
  </div>  

	</form>





         

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
