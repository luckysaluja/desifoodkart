
<?php $this->load->view('include/header');?>

    <div id="wrapper">

        <?php 
		 $this->load->view('include/sideMenu');
		?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <h3> Today Sales</h3>
                        <hr />
                    </div>
                </div>
             </div>   
               <div style="height:300px; background:;overflow-y:scroll" class="container-fluid">

                 <div class="table-responsive " style=" margin-bottom:10px; width:100%" >          
                        <table class="table" >
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Product Name</th>
                              <th>Order Time </th>
                              <th>Order Date</th>
                              <th>Total Item</th>
                              <th>Order Status</th>
                              <th>Amount</th>
                              <th>Employee Name</th>
                              <th>Payment</th>
                              
                              
                             </tr>
                           </thead>
                           
                           <tbody>
                              <?php
							  $date=date('Y-m-d');
						      $s_no=1;
							  $result=$this->admin_model->todaySales($date);
							  foreach($result as $row)
							  {
								  echo "<tr>";
								      echo"<td>$s_no</td>";
									  echo"<td>$row->prod_name</td>";
									  echo"<td>$row->order_time</td>";
									  echo"<td>$row->order_date</td>";
									  echo"<td>$row->total_item</td>";
									  echo"<td>$row->order_status</td>";
									  echo"<td>$row->price</td>";
									  echo"<td>$row->emp_name</td>";
							          echo "<td><a href=".site_url('admin/update_payment_status/'.$row->sales_id)." 
									  class='btn btn-success'>Payment</a></td>";

								  echo "</tr>";
								  $s_no+=1;
							  }
							  ?>
  
                           </tbody>
                           
                           </table>
                     </div>
                     
               </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12"><hr /></div>
                         <div class="col-lg-6">
                          <h3> Total Income of Today</h3>
                         </div> 
                         <div class="col-lg-6">
                          <h3 style="text-align:right">
                          
                          <?php
						      $date=date('Y-m-d');
							  $total_income=0;
						      $total=$this->admin_model->todayIncome($date);
							  foreach($total as $payment)
							  {
								  $total_income=$total_income + $payment->pay_amount;
							  }
							  echo "<h3 style='text-align:right'> $total_income</h3>"
							  
						  ?>
                          
                          
                          
                          </h3>
                         </div> 
                        <div class="col-lg-12"><hr /></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        
                         <div class="col-lg-6">
                          <h3> Gross  Income of Company </h3>
                         </div> 
                         <div class="col-lg-6">
                          <?php
						      
							  $gross_income=0;
						      $gross_total=$this->admin_model->grossIncome();
							  foreach($gross_total as $payment)
							  {
								  $gross_income=$gross_income + $payment->pay_amount;
							  }
							  echo "<h3 style='text-align:right'> $gross_income</h3>"
							  
						  ?>
                         </div> 
                        <div class="col-lg-12"><hr /></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                       <div class="col-lg-12">
                          <h3> All Sales Of Company</h3>
                         </div>
                        
                        <hr />
                    </div>
                </div>              
               <div style="height:300px; background:;overflow-y:scroll" class="container-fluid">

                 <div class="table-responsive " style=" margin-bottom:10px; width:100%" >          
                        <table class="table" >
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Product Name</th>
                              <th>Order Time </th>
                              <th>Order Date</th>
                              <th>Total Item</th>
                              <th>Order Status</th>
                              <th>Amount</th>
                              <th>Employee Name</th>
                              <th>Payment</th>
                              
                              
                             </tr>
                           </thead>
                           
                           <tbody>
                              <?php
						      $s_no=1;
							  $result=$this->admin_model->allSales();
							  foreach($result as $row)
							  {
								  echo "<tr>";
								      echo"<td>$s_no</td>";
									  echo"<td>$row->prod_name</td>";
									  echo"<td>$row->order_time</td>";
									  echo"<td>$row->order_date</td>";
									  echo"<td>$row->total_item</td>";
									  echo"<td>$row->order_status</td>";
									  echo"<td>$row->price</td>";
									  echo"<td>$row->emp_name</td>";
							          echo "<td>Recieved</td>";

								  echo "</tr>";
								  $s_no+=1;
							  }
							  ?>
									
  
                           </tbody>
                           
                           </table>
                     </div>
                     
               </div>

               <br />
                
                      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> 
                 
                 
            </div>
            

        </div>

        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
  
<script src="../../../resources/js/jquery.js"></script>

 

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

	</body>
</html>