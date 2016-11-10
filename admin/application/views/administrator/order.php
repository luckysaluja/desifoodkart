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
                       <h3>All Order List</h3>
                         <hr />
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
										echo "<td>$row->order_id</td>";
										echo "<td>$row->delivery_time</td>";
										echo "<td>$row->order_time</td>";
										echo "<td>$row->order_date</td>";
										echo "<td>$row->order_status</td>";
										echo "<td>$row->total_item</td>";
										echo "<td><input type='button' value='Full View' 
										class='btn btn-success' onclick=fullview('$id')></td>";
								  
								  echo"</tr>";
								  echo"<tr id='$id'  style='display:none'>";
								     echo "<td colspan='8'>";
									 
									  echo "<div class='container-fluid'style=background:#E5E5E5;>";
									  
									      echo "<div class='row' >";
										   
										     echo "<div class='col-lg-12' style='background:grey;color:white'>";
											       echo "Full Description";
											 echo "</div>";
											  
											 echo "<div  class='col-lg-12'>"; 
											 //order information
											      echo "<div  class='col-lg-12' style='background:white; color:black ; margin-top:5px;
												  border-radius:10px'>
												   ORDER INFORMATION
												  </div>"; 
											        echo "<div  class='col-lg-6' style='border-right:1px dotted white'>"; 
											        //part 1
											              echo "<div  class='col-lg-12' style='
														  margin-top:5px'>
				                                            <h6>Order ID</6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                           $row->order_id
											              </div>";
														  
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Delivery Time</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $row->delivery_time
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Payment Mode</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $row->pay_mode
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Paid Amount</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $row->price
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Order Date</6>
											              </div>";
														  echo "<div  class='col-lg-12 ' style='
														  margin-bottom:5px'>
				                                           $row->order_date
											              </div>";
														  
														  
											 
											        echo "</div>"; 
													
													echo "<div  class='col-lg-6'>"; 
											         //part 2
											        echo "<div  class='col-lg-12' style='
														  margin-top:5px'>
				                                            <h6>Order Time</6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                           $row->order_time
											              </div>";
														  
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Order IP Address</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $row->order_ip
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Order Cancellation</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $row->order_cancellation
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Total Item</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $row->total_item
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Order Status</6>
											              </div>";
														  echo "<div  class='col-lg-12 ' style='
														  margin-bottom:5px'>
				                                           $row->order_status
											              </div>";

											 
											        echo "</div>";
											 
											 echo "</div>"; 
											 
											 echo "<div  class='col-lg-12'>"; 
											 //customer information 
											 
											      echo "<div  class='col-lg-12' style='background:white; color:black ; margin-top:0px;
												  border-radius:10px'>
												   CUSTOMER INFORMATION
												  </div>"; 
												  $this->db->where('cust_id',$row->cust_id);
												  $query=$this->db->get('customer_info');
												  $result=$query->row();
												  
											        echo "<div  class='col-lg-6' style='border-right:1px dotted white'>"; 
											        //part 1
											              echo "<div  class='col-lg-12' style='
														  margin-top:5px'>
				                                            <h6>Customer ID</6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                           $result->cust_id
											              </div>";
														  
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Customer Name</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $result->cust_name
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6><u>E-mail</u></6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                          $result->cust_email
											              </div>";
														  
														  
														  
														  
											 
											        echo "</div>"; 
													
													echo "<div  class='col-lg-6'>"; 
											         //part 2
											        echo "<div  class='col-lg-12' style='
														  margin-top:5px'>
				                                            <h6>Mobile No.</6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                          $result->cust_phone
											              </div>";
														  
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Address</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                           $result->cust_address
											              </div>";
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Pin Code</6>
											              </div>";
														  echo "<div  class='col-lg-12'>
				                                          $result->cust_pincode
											              </div>";
														
														

											 
											        echo "</div>";
											 
											 echo "</div>"; 
											 
											   
											 echo "</div>"; 
											 echo "<div  class='col-lg-12'>"; 
											 //employee information
											      echo "<div  class='col-lg-12' style='background:white; color:black ; margin-top:5px;
												  border-radius:10px'>
												   PRODUCT INFORMATION
												  </div>"; 
												  $this->db->where('prod_id',$row->prod_id);
												  $query=$this->db->get('product_info');
												  $result=$query->row();
												  
											        echo "<div  class='col-lg-6' style='border-right:1px dotted white'>"; 
											        //part 1
											              echo "<div  class='col-lg-12' style='
														  margin-top:5px'>
				                                            <h6>Product ID</6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                           $result->prod_id
											              </div>";
														  
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Product Name</6>
											              </div>";
														  echo "<div  class='col-lg-12' style='border-bottom:1px solid white;
														  margin-bottom:10px'>
				                                           $result->prod_name
											              </div>";
														 
			
											 
											        echo "</div>"; 
													
													echo "<div  class='col-lg-6' >"; 
											         //part 2
											        echo "<div  class='col-lg-12' style='
														  margin-top:5px'>
				                                            <h6>Price</6>
											              </div>";
														  echo "<div  class='col-lg-12' >
				                                          $result->prod_price
											              </div>";
														  
														  echo "<div  class='col-lg-12' style='border-top:1px solid white;
														  margin-top:5px'>
				                                            <h6>Category</6>
											              </div>";
														  echo "<div  class='col-lg-12' style='border-bottom:1px solid white; 
														  margin-bottom:10px' >
				                                           $result->prod_category
											              </div>";
														 
														
														

											 
											        echo "</div>";
											 
											 echo "</div>"; 

											       
											 echo "</div>"; 
											   
										  echo "</div>";	   
									 
									  echo "</div>";
				   
									 echo "</td>";
								  
								  echo"</tr>";
								  
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