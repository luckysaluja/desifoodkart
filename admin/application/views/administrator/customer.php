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
                        <h3>Manage Customer</h3>
                         <hr />
                         <div class="table-responsive">          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Customer Name</th>
                              <th>DFK_ID</th>
                              <th>LoginID</th>
                              <th>Mobile No</th>
                              <th>Status</th>
                              <th>Full View</th>
                              
                              
                             </tr>
                           </thead>
                           
                         <tbody>
                         <?php
						      $s_no=1;
						      foreach($r as $row)
							  {
								  $id=$s_no.'ID';
								  echo"<tr>";
								        echo "<td>$s_no</td>";
										echo "<td>$row->cust_name</td>";
										echo "<td>$row->cust_id</td>";
										echo "<td>$row->cust_email</td>";
										echo "<td>$row->cust_phone</td>";
										echo "<td>$row->cust_term_condition</td>";
										echo "<td><input type='button' value='Full View' 
										class='btn btn-success' onclick=fullview('$id')></td>";
								  
								  echo"</tr>";
								  echo "<tr id=$id style='display:none; border-bottom-left-radius:5px;
								  border-bottom-right-radius:5px;'>";
									    echo "<td colspan='7'>";
										   echo "<div class='container-fluid' style=background:#E5E5E5;>";
                                             echo "<div class='row'>";
										       echo "<div class='col-lg-12' style='background:grey;color:white '>";
											    echo"<span>Full View </span>";
											   echo "</div>";
											   
											   echo "<div class='col-lg-6  col-s-12 col-xs-12'
											    style='border-bottom-left-radius:5px;
											    background:#E5E5E5; border-right:1px dotted white'>";
												 
												 echo "<div class='row' style='margin-top:5px;'>";
												    echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>DFK_ID:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_id;
												    echo "</div>";
													
													echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>Name:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_name;
												    echo "</div>";
													
													echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>E-mail:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_email;
												    echo "</div>";
													
													echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>Phone No:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_phone;
												    echo "</div>";
													
													echo "<div class='col-lg-12' 
													style='border-top:1px solid white;'>";
												    echo "<h6>Address:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12' style='margin-bottom:5px;
													border-bottom:1px solid white'>";
												    echo $row->cust_address;
												    echo "</div>";
													
												 echo "</div>";
												 
												 
												echo"</div>";
												
												
												echo "<div class='col-lg-6  col-s-12 col-xs-12'
											    style='border-bottom-left-radius:5px;
											    background:#E5E5E5;'>";
												  												 
												 echo "<div class='row' style='margin-top:5px;'>";
												    echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>Term & Condition:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_term_condition;
												    echo "</div>";
													
													echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>Pin Code:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_pincode;
												    echo "</div>";
													
													echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>Registration Date:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_date;
												    echo "</div>";
													
													echo "<div class='col-lg-12' style='border-top:1px solid white'>";
												    echo "<h6>Registration Time:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12'>";
												    echo $row->cust_time;
												    echo "</div>";
													
													echo "<div class='col-lg-12' 
													style='border-top:1px solid white;'>";
												    echo "<h6>IP Address:-</h6>";
												    echo "</div>";
													echo "<div class='col-lg-12' style='margin-bottom:5px;
													border-bottom:solid white 1px'>";
												    echo $row->cust_ip;
												    echo "</div>";
													
												 echo "</div>";

												
												echo"</div>";
											   
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