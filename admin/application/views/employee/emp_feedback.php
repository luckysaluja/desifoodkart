<?php $this->load->view('employee/include/header');?>
 

  

  
    <!-- /#wrapper -->
 <form action="<?php echo site_url('admin/submit_feedback')?>" method="post" >
    
 <!-- Page Content -->
 <div class="container">
    
      
     <div class=" container"  style="margin-top:20px; height:auto; height:300px;  background:white; border-radius:10px">
     <!--My Order list -->
     
         <div class="row">
         
           <div class="col-lg-12" style="  margin-top:40px">
                
                <div class="col-lg-12" style="margin-top:30px">  
                
                   <div class="col-lg-4" style="text-align:right">
                     
                      <label> Description</label>
                   
                   </div>
                   <div class="col-lg-8" style="text-align:left">
                    
                       <textarea name="description"  rows="5" cols="70"  placeholder=" &nbsp; &nbsp; Write Feedback  "required
                        style="border-radius:10px; border:none ; 
                        box-shadow:0px 0px 6px grey"></textarea>
                    
                   </div>
                
                 </div>
                 
                 <div class="col-lg-12" style="margin-top:30px">  
                
                   <div class="col-lg-4" style="text-align:right">
                     
                      <label> Suggestion</label>
                   
                   </div>
                   <div class="col-lg-8" style="text-align:left">
                    
                       <textarea name="suggestion"  rows="5" cols="70"  placeholder=" &nbsp; &nbsp; Write Suggestion (Optional)"
                        style="border-radius:10px; border:none ; box-shadow:0px 0px 6px grey"></textarea>
                    
                   </div>
                
                 </div>
             
             <div class="col-lg-12" style="margin-top:30px ; text-align:center" > 
             
               <input type="submit" class="btn btn-info" value="Submit">
             </div>
             
           </div>
     
     
        </div>
       
    </div>  
         

 </div>
 <!-- /.container -->
 
    
    </form>

    <!-- Menu Toggle Script -->
  
 
	</body>
    
</html>