    <?php $this->load->view('include/header');?>
    <div id="wrapper">
    <?php echo form_open_multipart('admin/add_new_employee'); ?>
       <?php 
		 $this->load->view('include/sideMenu');
		?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Add Employee</h3>
                        <hr />
                        
                        
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
                            <!--Employee Name....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-7">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Employee Name</span>
                                  <?php
								  $attributes= array("name"=>"emp_name",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Name",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_name");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-5"></div>
                           </div> 
                         
                           <!--Row  No 2-->
                            <div class="row">
                            <!--Employee Address....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-7">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1"> Address</span>
                                  <?php
								  $attributes= array("name"=>"emp_address",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Address",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_address","rows"=>"1");
								  echo form_textarea($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-5"></div>
                           </div> 

                        <!--Row  No 3-->
                            <div class="row">
                            <!--Employee Designation....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-7">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1"> Designation
                                 </span>
                                  <?php
								  $attributes= array("name"=>"emp_designation",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Designation",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_designation");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-5"></div>
                           </div> 

                        <!--Row  No 4-->
                            <div class="row">
                            <!--Employee Term condition....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-6">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Terms & Condition
                                 </span>
                                 
                                 <select class="btn btn-default" name="emp_term_condition" id="emp_term_condition" 
                                 style="border-top-left-radius:0px; border-bottom-left-radius:0px">
                                 <option>Active</option>
                                 <option>Teminated</option>
                                 
                                 </select>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-4"></div>
                           </div> 
                        <!--Row  No 5-->
                            <div class="row">
                            <!--Employee Salary....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-4">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Salary
                                 </span>
                                  <?php
								  $attributes= array("name"=>"emp_salary",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Salary",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_salary");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-6"></div>
                           </div> 

                        <!--Row  No 6-->
                            <div class="row">
                            <!--Employee Contact...!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-4">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Contact
                                 </span>
                                  <?php
								  $attributes= array("name"=>"emp_contact",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Contact No.",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_contact");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-6"></div>
                           </div> 
                        <!--Row  No 7-->
                            <div class="row">
                            <!--Employee Qalification....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-7">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Qualification
                                 </span>
                                  <?php
								  $attributes= array("name"=>"emp_qualification",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Qualification",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_qualification");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-5"></div>
                           </div> 
                       <!--Row  No 8-->
                            <div class="row">
                            <!--Employee login id....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-7">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Set Login ID
                                 </span>
                                  <?php
								  $attributes= array("name"=>"emp_login_id",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Login ID",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_login_id");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-3"></div>
                           </div> 

                        <!--Row  No 9-->
                            <div class="row">
                            <!--Employee Password....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-7">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Set Password
                                 </span>
                                  <?php
								  $attributes= array("name"=>"emp_password",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter Employee Password",
								  "aria-describedby"=>"basic-addon1","id"=>"emp_password");
								  echo form_input($attributes);
								 ?>
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-3"></div>
                           </div> 

                         
                        <!--Row  No 10-->   
                             
                          <div class="row">
                            <!--Employee Image....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-6 col-m-3 col-s-2 col-xs-1">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon "style="background:#69AED8"
                                  id="basic-addon1">Image</span>
                                  
                                  <?php
								  $attributes= array("name"=>"emp_image",
								  "class"=>"btn btn-default","id"=>"emp_image",
								  "style"=>"border-top-left-radius:0px;border-bottom-left-radius:0px");
								  echo form_upload($attributes);
								 ?>
                                
                                </div> 
                               </div> 
                               
                             </div>  
                               
                            <div class="col-lg-4 col-m-7 col-s-8 col-xs-9"></div>
                           </div>  
                             
                            <!--Row  No 11-->   
                             
                          <div class="row">
                            <!--Employee submit....!-->
                            <div class="col-lg-2"></div>
                             <div class="col-lg-8">
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                  <?php
								  $attributes= array("name"=>"emp_submit",
								  "class"=>"btn btn-success",
								  "value"=>"Add Employee");
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