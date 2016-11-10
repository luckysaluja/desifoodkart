<?php $this->load->view('employee/include/header');?>
 

  <?php 
                        
                        $emp_login_id=$_SESSION['employee_login_status'];
		                $emp_info = $this->admin_model->getEmployee($emp_login_id);
  ?>

  
    <!-- /#wrapper -->
  <div class="container-fluid"  style="height:auto; display:none; border:0px solid black; margin-top:50px ; background:#CCC" id="emp_profile" >
  
        <div class="col-lg-6" style="height:100%;">
            <div class="col-lg-12" style=" color:white; margin-top:5px; font-family:'Lucida Console', Monaco, monospace" >
             <i> Personal Information</i>
           
             </div>
            <div class="col-lg-8" style="margin-top:5px ; ">
            
             <div class="col-lg-12"><label><u>Name</u></label></div>
             <div class="col-lg-12"><label style="color:blue"><?php echo $emp_info->emp_name ; ?></label></div>
             <div class="col-lg-12"><label><u>Address</u></label></div>
             <div class="col-lg-12"><label style="color:blue"><?php echo $emp_info->emp_address ; ?></label></div>
             <div class="col-lg-12"><label><u>Salary</u></label></div>
             <div class="col-lg-12"><label style="color:blue"><?php echo $emp_info->emp_salary ; ?></label></div>
             <div class="col-lg-12"><label><u>Contact</u></label></div>
             <div class="col-lg-12"><label style="color:blue"><?php echo $emp_info->emp_contact ; ?></label></div>
             <div class="col-lg-12"><label><u>E-mail</u></label></div>
             <div class="col-lg-12"><label style="color:blue"><?php echo $emp_info->emp_login_id ; ?></label></div>
           </div>
           <div class="col-lg-4" style="margin-top:20px">
              <div class="col-lg-12"><label><u>Image</u></label></div>
              <div class="col-lg-12">
             <img src="<?php echo base_url('resources/employee_image/'.$emp_info->emp_image) ?>"  class="col-lg-12" height="100px"
             style="border-radius:100px; margin-top:5px"/>
             </div>
             
             <div class="col-lg-12" style="margin-top:70px"><label><u>Joined Date</u></label></div>
             <div class="col-lg-12"><label style="color:blue"><?php echo $emp_info->emp_date ; ?></label></div>

             
           </div>
           
        </div>
        
        <div class="col-lg-6" style="height:100%; background:">
        <?php echo form_open('admin/emp_change_password/'.$emp_info->emp_id); ?> 
         <div class="col-lg-6">
            <div class="col-lg-12" style=" color:white; margin-top:5px; font-family:'Lucida Console', Monaco, monospace" >
             <i> Setting</i>
             </div>
             <div class="col-lg-12" style="margin-top:20px"><u>New Password</u></div>
             <div class="col-lg-12">
             <input type="password" class="form-control" style="width:100%"  name="emp_new_password" placeholder="Enter New Password"/>
             
             </div>
             <div class="col-lg-12" style="margin-top:20px"><u>Re-Password</u></div>
             <div class="col-lg-12">
              <input type="password" class="form-control" style="width:100%" name="emp_re_password" placeholder="Enter Password Again" />
             
             </div>
             <div class="col-lg-12" style="margin-top:20px">
             <input type="submit" class="btn btn-success"  value="Change Password" />
             
             </div>
           
             
           </div> 
           <div class="col-lg-6" style="margin-bottom:10px">
              <div class="col-lg-12" style="margin-top:60px; color:red">
                <?php echo validation_errors();?>
                
              </div>
              
           </div>  
           
           <?php echo  form_close(); ?>  
        </div>
        
  
  </div>
<div class="container" style="box-shadow:2px 1px 5px 1px #8E8E8E; margin-top:55px">

<div class="container-fluid">
 <h3 style="text-shadow:2px 2px 2px purple , 3px 4px 6px yellow" > New Order</h3>
</div>

      <div style="height:auto; margin-bottom:10px;" class="col-lg-12">
        <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Product Name</th>
                              <th>Order ID</th>
                              <th>Delivery Time</th>
                              <th>Order Time </th>
                              <th>Order Date</th>
                              <th>Delivery Status</th>
                              <th>Total Item</th>
                              <th>Pick Order</th>
                              
                             </tr>
                           </thead>
                           
                        <tbody>
                         <?php
	                      $date=date('Y-m-d');
						  $s_no=1;
                          $result=$this->admin_model->getTodayOrder($date);
	                       foreach($result as $row)
	                         {
		                     echo "<tr>"; 
		                        echo "<td>$s_no</td>";
								echo "<td>$row->prod_name</td>";
								echo "<td>$row->order_id</td>";
								echo "<td>$row->delivery_time</td>";
								echo "<td>$row->order_time</td>";
								echo "<td>$row->order_date</td>";
								echo "<td>$row->order_status</td>";
								echo "<td>$row->total_item</td>";
								echo "<td><a href=".site_url('admin/pick_order/'.$row->id)." class='btn btn-success'>Pick</a></td>";
								
							   echo "</tr>";
							   
							   $s_no+=1;
	                         }
   
                         ?>
                        </tbody>    
                      </table>
                                   
                    </div>
    
      </div>

</div>
 <div class="container" style="box-shadow:2px 1px 5px 1px #8E8E8E; margin-top:10px">

<div class="container-fluid">
 <h3 style="text-shadow:2px 2px 2px purple , 3px 4px 6px yellow"> Your Picked Order</h3>
</div>

      <div style="height:auto; margin-bottom:10px;" class="col-lg-12">
        <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Product Name</th>
                              <th>Order ID</th>
                              <th>Delivery Time</th>
                              <th>Order Time </th>
                              <th>Order Date</th>
                              <th>Delivery Status</th>
                              <th>Total Item</th>
                              <th>Order Dispatch</th>
                              
                             </tr>
                           </thead>
                           
                        <tbody>
                         <?php
	                      $date=date('Y-m-d');
						  $s_no=1;
						  $emp_id=$_SESSION['emp_id'];
                          $result=$this->admin_model->yourPickedOrder($date,$emp_id);
	                       foreach($result as $row)
	                         {
		                     echo "<tr>"; 
		                        echo "<td>$s_no</td>";
								echo "<td>$row->prod_name</td>";
								echo "<td>$row->order_id</td>";
								echo "<td>$row->delivery_time</td>";
								echo "<td>$row->order_time</td>";
								echo "<td>$row->order_date</td>";
								echo "<td>$row->order_status</td>";
								echo "<td>$row->total_item</td>";
								echo "<td>";
								if($row->order_status!='COMPLETE')
								{
								 echo "<a href=".site_url('admin/dispatch_order/'.$row->id)." 
								class='btn btn-success'> Order Dispatch</a>";
								}
								else
								{
									echo"<span class='btn btn-success '>Dispatched</span>";
								}
								
								echo"</td>";
								
							   echo "</tr>";
							   
							   $s_no+=1;
	                         }
   
                         ?>
                        </tbody>    
                      </table>
                                   
                    </div>
    
      </div>

</div>

 
 
 <div class="container" style="box-shadow:2px 1px 5px 1px #8E8E8E; margin-top:10px">

<div class="container-fluid">
 <h3 style="text-shadow:2px 2px 2px purple , 3px 4px 6px yellow">Today Completed Order</h3>
</div>

      <div style="height:auto ; margin-bottom:10px;" class="col-lg-12">
       <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Order ID</th>
                              <th>Delivery Time</th>
                              <th>Order Time </th>
                              <th>Order Date</th>
                              <th>Delivery Status</th>
                              <th>Total Item</th>
                              <th>Employee Name</th>
                              
                              
                             </tr>
                           </thead>
                           
                           <tbody>
                             <?php
	                         $date=date('Y-m-d');
							 $s_no=1;
                             $result=$this->admin_model->getCompletedOrder($date);
	     
                             foreach($result as $row)
	                         {
								echo "<tr>"; 
		                        echo "<td>$s_no</td>";
								echo "<td>$row->order_id</td>";
								echo "<td>$row->delivery_time</td>";
								echo "<td>$row->order_time</td>";
								echo "<td>$row->order_date</td>";
								echo "<td>$row->order_status</td>";
								echo "<td>$row->total_item</td>";
								echo "<td>$row->emp_name</td>";
							   echo "</tr>";
							   
							   $s_no+=1;
	                         }
   
                            ?>
                         </tbody>    
                      </table>
                                   
                    </div>
      </div>

</div>
 <div class="container" style="box-shadow:2px 1px 5px 1px #8E8E8E; margin-top:10px">

<div class="container-fluid">
 <h3 style="text-shadow:2px 2px 2px purple , 3px 4px 6px yellow">Today Cancelled Order</h3>
</div>

      <div style="height:auto ; margin-bottom:10px;" class="col-lg-12">
       <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Order ID</th>
                              <th>Delivery Time</th>
                              <th>Order Time </th>
                              <th>Order Date</th>
                              <th>Delivery Status</th>
                              <th>Total Item</th>
                              
                              
                             </tr>
                           </thead>
                           
                           <tbody>
                             <?php
	                         $date=date('Y-m-d');
							 $s_no=1;
                             $result=$this->admin_model->getCencelledOrder($date);
	     
                             foreach($result as $row)
	                         {
								echo "<tr>"; 
		                        echo "<td>$s_no</td>";
								echo "<td>$row->order_id</td>";
								echo "<td>$row->delivery_time</td>";
								echo "<td>$row->order_time</td>";
								echo "<td>$row->order_date</td>";
								echo "<td>$row->order_status</td>";
								echo "<td>$row->total_item</td>";
							   echo "</tr>";
							   
							   $s_no+=1;
	                         }
   
                            ?>
                         </tbody>    
                      </table>
                                   
                    </div>
      </div>

</div>

    <!-- Menu Toggle Script -->
  
 <script>
	 function expandProfile()
	 {
		 $('#emp_profile').slideToggle('slow');
	 }
	 </script>
     
                <?php
                 if(isset($error_message))
	               {
		           echo "<script> alert('$error_message');</script>";
	               }
                 ?>
                 <?php
                 if(isset($password_change_conformation))
	               {
		           echo "<script> alert('$password_change_conformation');</script>";
	               }
                 ?>
	</body>
    
</html>