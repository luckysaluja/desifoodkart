<?php $this->load->view('include/header');?>

                                   <?php
									   foreach($r  as $data)
									   {
										   }
								   ?>
    <div id="wrapper">
    <?php echo form_open('admin/changePassword/'.$data->admin_id); ?>

       <?php 
		 $this->load->view('include/sideMenu');
		?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Administrator</h3>
                        <hr />
                        <div class="col-lg-12" style="text-align:center ;">
                          
                            <img src="<?php echo base_url('./resources/employee_image/'.$data->admin_image)?>" height="200px" width="200px"
                              style="border-radius:100px ; "
                             /> 
                           
                        </div>
                        
                        <div class="col-lg-12" style="margin-top:10px">
                          <ul class="nav nav-tabs">
                              <li class="active" id="profile" onclick="selectTab(this.id)" 
                              style=" border:1px solid grey ; height:40px;border-bottom:none ; width:100px; background:grey;
                              text-align:center; border-top-left-radius:10px; border-top-right-radius:10px; cursor:pointer; color:white"
                              >
                              
                              
                             <div  style="margin-top:7px">Profile</div></li>
                         
                              <li  id="setting" onclick="selectTab(this.id)"
                                style=" border:1px solid grey ; height:40px;border-bottom:none ; width:100px;
                              text-align:center; border-top-left-radius:10px; border-top-right-radius:10px; cursor:pointer
                              ; ">
                              
                               <div  style="margin-top:7px">
                              Setting
                              </div>
                              </li>
                             
                          </ul>
                          <div class="col-lg-12" style="border:1px solid grey; height:200px; background:grey; padding:.02px"
                           id="profile_tab">
                             <div class="col-lg-12" style="background:white ; height:180px; margin-top:10px">
                                    
                                    <?php
									  	
									      echo"<div style=' margin-top:10px'> <label><u>Name</u></label> </div>";	
										  echo"<div> <label>$data->admin_name</label> </div>";		
										  
										   echo"<div> <label><u>E-mail</u></label> </div>";	
										  echo"<div> <label>$data->admin_email</label> </div>";	
										  
										   echo"<div> <label><u>Contact No</u></label> </div>";	
										  echo"<div> <label>$data->admin_contact </label></div>";						
									     
									   ?>
                                    
                             </div>
                             
                          </div>
                          
                          <div class="col-lg-12" style="border:1px solid grey; height:200px; display:none; background:grey;
                          padding:.02px" 
                          id="setting_tab">
                              <div class="col-lg-12" style="background:white ; height:180px; margin-top:10px">
                              
                            <div class="col-lg-8">                              <!--Row  No 9-->
                      
                        
                             

                        <!--Row  No 9-->
                            <div class="row">
                            <!--Employee Password....!-->
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">New Password
                                 </span>
                                  <?php
								  $attributes= array("name"=>"admin_new_password",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter New Password",
								  "aria-describedby"=>"basic-addon1","id"=>"admin_new_password");
								  echo form_password($attributes);
								 ?>
                               </div> 
                               
                             </div>  
                               
                           </div> 
                        <!--Row  No 9-->
                            <div class="row">
                            <!--Employee Password....!-->
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                                 <span class="input-group-addon " 
                                 style="background:#69AED8" id="basic-addon1">Re-Password
                                 </span>
                                  <?php
								  $attributes= array("name"=>"admin_re_password",
								  "class"=>"form-control ",
								  "placeholder"=>"Enter  Password Again",
								  "aria-describedby"=>"basic-addon1","id"=>"admin_re_password");
								  echo form_password($attributes);
								 ?>
                               </div> 
                               
                             </div>  
                               
                           </div> 
                            <!--Row  No 11-->   
                             
                          <div class="row">
                            <!--Employee submit....!-->
                             
                              <div class="col-lg-12 col-m-6 col-s-4" style="margin-top:10px;">
                               <div class="input-group ">
                             <?php
								  $attributes= array("name"=>"admin_submit",
								  "class"=>"btn btn-success",
								  "value"=>"Change Password");
								  echo form_submit($attributes);
								 ?>								 
                               </div> 
                               
                             </div>  
                               
                           </div>  
                     </div>
                     
                     <!--error area-->
                     
                     <div class="col-lg-4" style="color:red">
                        <?php echo validation_errors();
								 ?>
                     </div>

                             </div>
                             
                          </div>
                          
                        </div>
                    
                    </div>
                </div>
                
                
            </div>
              <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-top:20px">Toggle Menu</a>

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
     <script>
	 
	 function selectTab(id)
	 {
		 if(id=='profile')
		 {
           document.getElementById('setting_tab').style.display='none';
		   document.getElementById('profile_tab').style.display='block';
		   document.getElementById(id).style.background='grey';
		   document.getElementById(id).style.color='white';
		   document.getElementById('setting').style.background='none';
		   document.getElementById('setting').style.color='black';

		 }
		 if(id=='setting')
		 {
		   document.getElementById('profile_tab').style.display='none';
		   document.getElementById('setting_tab').style.display='block';
		    document.getElementById(id).style.background='grey';
			document.getElementById(id).style.color='white';
			document.getElementById('profile').style.color='black';

		   document.getElementById('profile').style.background='none';
		 }
	 }
	 
	 
    </script>
<?php echo form_close(); ?>
	</body>
</html>