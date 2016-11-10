    <?php $this->load->view('include/header');?>
    <div id="wrapper">
    <?php echo form_open_multipart('admin/add_food'); ?>
       <?php 
		 $this->load->view('include/sideMenu');
		?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Add Product</h3>
                        <hr />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<span style='color:green'>".@$add_status."</span>"?>
                        
                        
                        <div class="container-fluid" >
                        
                        <!--Display Error-->
                            <div class="row">
                            <!--Error Row....!-->
                            <div class="col-lg-3"></div>
                             <div class="col-lg-6">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px; color:red">
                                 <?php echo validation_errors();
								 ?>
                                  <?php if(isset($error))
								  {
									  echo $error;
								  }
								  ?>
                                  
                                 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-3"></div>
                           </div> 
                           
                           
                        <!--Row  No 1-->
                            <div class="row">
                            <!--Product Name....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-8">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Item Name</span>
                                  <?php
								  $attributes= array("name"=>"prod_name",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Product Name",
								  "aria-describedby"=>"basic-addon1","id"=>"prod_image");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-2"></div>
                           </div> 
                         
                        <!--Row  No 2-->   
                             
                          <div class="row">
                            <!--Product Image....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-6 col-m-3 col-s-2 col-xs-1">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:30px;">
                               <div class="input-group ">
                                 <span class="input-group-addon "style="background:#69AED8"
                                  id="basic-addon1">Image</span>
                                  
                                  <?php
								  $attributes= array("name"=>"prod_image",
								  "class"=>"btn btn-default","id"=>"prod_image",
								  "style"=>"border-top-left-radius:0px;border-bottom-left-radius:0px");
								  echo form_upload($attributes);
								 ?>
                                
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-4 col-m-7 col-s-8 col-xs-9"></div>
                           </div>  
                             
                           <!--Row  No 3-->   
                             
                          <div class="row">
                            <!--Product price....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-5">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:30px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " style="background:#69AED8"
                                  id="basic-addon1">Product Price</span>
                                  <?php
								  $attributes= array("name"=>"prod_price",
								  "class"=>"form-control",
								  "placeholder"=>"Enter Product Price");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-5"></div>
                           </div>     
                            <!--Row  No 4-->   
                             
                          <div class="row">
                            <!--Product Category....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-8">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:30px;">
                               <div class="input-group ">
                                 <span class="input-group-addon "style="background:#69AED8"
                                  id="basic-addon1">Product Category</span>
                                 <select class="btn btn-default" name="prod_category" id="prod_category" 
                                 style="border-top-left-radius:0px; border-bottom-left-radius:0px">
                                 <option>Bihari Food </option>
                                 <option>Bengali Food </option>
                                 <option>Panjabi Food</option>
                                 <option>South Indian Food</option>
                                 <option>Hyderabadi Food</option>
                                 <option>Rajsathani Food</option>
                                 </select>
                                     
                                  
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-2"></div>
                           </div>    
                           
                            <!--Row  No 5-->   
                             
                          <div class="row">
                            <!--Product deal....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-8">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:30px;">
                               <div class="input-group ">
                                 <span class="input-group-addon" id="basic-addon1" style="background:#69AED8">Product Deal</span>
                                  <?php
								  $attributes= array("name"=>"prod_deal",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Product Deal",
								  "aria-describedby"=>"basic-addon1","id"=>"prod_deal");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-2"></div>
                           </div>     
                            <!--Row  No 6-->   
                             
                          <div class="row">
                            <!--Product submit....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-8">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:30px;">
                               <div class="input-group ">
                                  <?php
								  $attributes= array(
								  "class"=>"btn btn-success",
								  "value"=>"Add");
								  echo form_submit($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-2"></div>
                           </div>  
                           
                           
                           
                           
                           
                           
                           
                        </div> 
                        
                                            
                        <br />                    
                       <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
  

 

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<?php echo form_close(); ?>

	</body>
</html>