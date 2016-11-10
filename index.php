  <?php
if(isset($_REQUEST['error']))
{
	echo "<script>alert('Invalid Login')</script>";
}

?> 
 <?php
if(isset($_REQUEST['register']))
{
	echo "<script>alert('Register Successfully !')</script>";
}

?> 
 <?php
if(isset($_REQUEST['request']))
{
	echo "<script>alert('Login First')</script>";
}

?> 
  <?php
if(isset($_REQUEST['conformation']))
{
	echo "<script>alert('Order Placed Successfully')</script>";
}

?> 
   <!-- Header -->
    <?php  include("include/Header.php"); ?>
   

   <body onLoad="loadAllProduct(0)">
   
    <!-- banner -->
    <?php  include("include/banner.php"); ?>
    
    <!-- Page Content -->
   <div class="container">
    
      
     <div class=" container"  style="margin-top:20px; height:auto; background:white; border-radius:10px" id="loadallproduct">
     <!--all product Food-->
       
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
