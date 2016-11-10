 <?php 
     session_start();
	 if(!isset($_SESSION['customer_login']))
     {
	  header("location:index.php?request=yes");
     }
 
 ?>
 <!-- Header -->
    <?php  include("include/Header.php"); ?>
   

   <body >
   
 <form action="submit_feedback.php" method="post" >
    
 <!-- Page Content -->
 <div class="container">
    
      
     <div class=" container"  style="margin-top:20px; height:auto; height:300px;  background:white; border-radius:10px">
     <!--My Order list -->
     
         <div class="row">
         
           <div class="col-lg-12" style="  margin-top:40px">
                
                <div class="col-lg-12" style="margin-top:30px">  
                
                   <div class="col-lg-1" style="text-align:right">
                     
                      <label> Description</label>
                   
                   </div>
                   <div class="col-lg-11">
                    
                       <textarea name="description"  rows="5" cols="70"  placeholder="Write Feedback "required
                        style="border-radius:10px; border:none ; 
                        box-shadow:0px 0px 6px grey"></textarea>
                    
                   </div>
                
                 </div>
                 
                 <div class="col-lg-12" style="margin-top:30px">  
                
                   <div class="col-lg-1" style="text-align:right">
                     
                      <label> Suggestion</label>
                   
                   </div>
                   <div class="col-lg-11">
                    
                       <textarea name="suggestion"  rows="5" cols="70"  placeholder="Write Suggestion "
                        style="border-radius:10px; border:none ; box-shadow:0px 0px 6px grey"></textarea>
                    
                   </div>
                
                 </div>
             
             <div class="col-lg-8" style="margin-top:30px ; text-align:center" > 
             
               <input type="submit" class="btn btn-info" value="Submit">
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
    
    </form>
</body>

</html>
