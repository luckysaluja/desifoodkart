		
<?php $this->load->view('include/header');?>

    <div id="wrapper">

       <?php 
		 $this->load->view('include/sideMenu');
		?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Manage Employee</h3>
                         <hr />
                         <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Employee Name</th>
                              <th>Salary</th>
                              <th>LoginID</th>
                              <th>Mobile No</th>
                              <th>Status</th>
                              <th>Full View</th>
                              <th>Modify</th>
                              <th>Delete</th>
                              
                             </tr>
                           </thead>
                           
                         <tbody>
                              <?php
						        $tableName="employee_info";
								$s_no=1;
								foreach( $this->admin_model->getRecord($tableName) as $row)
								{
									$id=$s_no.'ID';
									echo "<tr>";
									      echo "<td>$s_no</td>";
										  echo "<td>$row->emp_name</td>";
										  echo "<td>$row->emp_salary</td>";
										  echo "<td>$row->emp_login_id</td>";
										  echo "<td>$row->emp_contact</td>";
										  echo "<td>$row->emp_term_condition</td>";
										  
										  echo "<td width='30px'><input type='button' onclick=fullview('$id')
										  value='Full View' class='btn btn-success'></td>";
										   echo "<td width='20px'><a class='btn btn-default'
										  href=".site_url('admin/modify_employee/'.$row->emp_id).">
										   <span class='glyphicon glyphicon-pencil'></span></a></td>";
										   echo "<td width='20px'><a class='btn btn-danger'
										  href=".site_url('admin/delete_employee/'.$row->emp_id).">
										  <span class='glyphicon glyphicon-trash'></span></a></td>";
										  
									echo "</tr>";
									echo "<tr id=$id style='display:none'>";
									   echo "<td colspan='9'>";
									      echo "<div class='container-fluid' style=background:#E5E5E5;>";
										   
										   echo "<div class='row' >";
										   
										     echo "<div class='col-lg-12' style='background:grey;color:white'>";
											       echo "Full Description";
											   echo "</div>";
											   
											   
										       echo "<div class='col-lg-5  col-s-12 col-xs-12'
											    style='border-bottom-left-radius:5px;
											    background:#E5E5E5;'>";
												echo "<div class='row' style='margin-top:10px'>";
												
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label> ID</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_id; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row'>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label> Name</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_name; 
												  echo "</div>";
												 
												echo"</div>"; 
												echo "<hr>"; 
												echo "<div class='row'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label> Address</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_address; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Designation</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_designation; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo"<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Term & Condition</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_term_condition; 
												  echo "</div>";
												  
												echo"</div>"; 
												
												
												
												 	 
											   echo "</div>";
											   
										       echo "<div class='col-lg-5 col-s-12 col-xs-12'
											    style='background:#E5E5E5;border-left:1px dotted white;
											   '>";
												echo "<div class='row' style='margin-top:10px'>";
												
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Salary</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_salary; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row'>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Contact</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_contact;
												  echo "</div>";
												 
												echo"</div>"; 
												echo "<hr>"; 
												echo "<div class='row'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Qualification</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													  echo $row->emp_qualification; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Login ID</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_login_id; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Insert Date / Time</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_date.','.$row->emp_time; 
													 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>IP Address</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->emp_ip; 
												  echo "</div>";
												  
												echo"</div>"; 
												 	 
											   echo "</div>";
											   
											   echo "<div class='col-lg-2 col-s-12  col-xs-12' style='background:#E5E5E5;
											   border-left:1px dotted white;height:237px;border-bottom-right-radius:5px'>";
											        echo "<div class='row' style='margin-top:10px'>";
													  echo "<div class='col-lg-12'>";
													    echo"<label>Image</label>";
													  echo "</div>";
													echo "</div>";  	
													  echo "<hr>";
													  
													echo "<div class='row' style='margin-top:10px'>";
													  echo "<div class='col-lg-12'>";
													 
													   $src=base_url('./resources/employee_image/'.$row->emp_image);
												       echo "<img src='$src' width='120px'height='90px' >";
														
													  echo "</div>";
													echo "</div>";   
													  echo "<hr>";
													echo "</div>";
											   echo "</div>";
											 
										   echo "</div>";
										   
										   
									    echo "</div>";
									   echo "</td>";
									 
									echo "</tr>";
									

									
									
									$s_no+=1;
									
								}
						   
						   
						   ?>

                         
                         </tbody>    
                        </table>
                                            
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
   <script>
	 function fullview(id)
	 {
		$('#'+id).toggle();
		
	 }
	
	</script>
	</body>
</html>