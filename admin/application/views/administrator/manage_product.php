<?php $this->load->view('include/header');?>
    <div id="wrapper">
    <?php echo form_open(); ?>
       <?php 
		 $this->load->view('include/sideMenu');
		?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                     
                        <h3>Manage Product</h3>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<span style='color:green'>".@$update_status."</span>"?>
                        <hr />
                        
                       <div class="table-responsive" >          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Product Name</th>
                              <th>Price</th>
                              <th>Category</th>
                              <th>Deal</th>
                              <th>Full View</th>
                              <th>Modify</th>
                              <th>Delete</th>
                              
                             </tr>
                           </thead>
                           
                         <tbody >
                           <?php
						        $tableName="product_info";
								$s_no=1;
								foreach( $this->admin_model->getRecord($tableName) as $row)
								{
									$id=$s_no.'ID';
									
									echo "<tr >";
									      echo "<td>$s_no</td>";
										  echo "<td>$row->prod_name</td>";
										  echo "<td>$row->prod_price</td>";
										  echo "<td>$row->prod_category</td>";
										  echo "<td>$row->prod_deal</td>";
										  echo "<td width='30px'><input type='button' onclick=fullview('$id')
										  value='Full View' class='btn btn-success'>
										  </td>";
										   echo "<td width='20px'><a class='btn btn-default'
										  href=".site_url('admin/modify_product/'.$row->prod_id).">
										   <span class='glyphicon glyphicon-pencil'></span></a></td>";
										   echo "<td width='20px'><a class='btn btn-danger'
										  href=".site_url('admin/delete_product/'.$row->prod_id).">
										  <span class='glyphicon glyphicon-trash'></span></a></td>";
										  
									echo "</tr>";
									echo "<tr id=$id style='display:none'>";
									   echo "<td colspan='8'>";
									      echo "<div class='container-fluid'style=background:#E5E5E5;>";
										   
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
													 echo $row->prod_id; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row'>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label> Name</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_name; 
												  echo "</div>";
												 
												echo"</div>"; 
												echo "<hr>"; 
												echo "<div class='row'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label> Price</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_price; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Category</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_category; 
												  echo "</div>";
												  
												echo"</div>"; 
												
												 	 
											   echo "</div>";
											   
										       echo "<div class='col-lg-5 col-s-12 col-xs-12'
											    style='background:#E5E5E5;border-left:1px dotted white;
											   '>";
												echo "<div class='row' style='margin-top:10px'>";
												
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Deal</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_deal; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row'>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Insert Date</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_date; 
												  echo "</div>";
												 
												echo"</div>"; 
												echo "<hr>"; 
												echo "<div class='row'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>Insert Time</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_time; 
												  echo "</div>";
												  
												echo"</div>"; 
												echo "<hr>";
												echo "<div class='row' style='margin-bottom:10px'>"; 
												 
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
											        echo "<label>IP Address</label>"; 
												  echo "</div>";
												  
												  echo "<div class='col-lg-6 col-s-12 col-m-12 col-xs-12' >";
													 echo $row->prod_ip; 
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
													 
													   $src=base_url('./resources/product_image/'.$row->prod_image);
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
<?php echo form_close(); ?>
	</body>
</html>