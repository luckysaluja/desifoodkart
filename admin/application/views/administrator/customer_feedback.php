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
                        <h3>Customer Feedback</h3>
                        <hr />
                      <div class="table-responsive" >          
                        <table class="table">
                           <thead >
                              <tr style="background:#7DA5DF">
                              <th>S.No</th>
                              <th>Customer ID</th>
                              <th>Feedback Description</th>
                              <th>Suggestion</th>
                              
                             </tr>
                           </thead>
                           
                         <tbody >
                           <?php
						      $s_no=1;
						      foreach($r as $row)
							  {
								echo "<tr>"; 
								   echo "<td>$s_no</td>";
								   echo "<td>$row->cust_id</td>";
								   echo "<td>$row->description</td>";
								   echo "<td>$row->suggestion</td>";
								echo "</tr>";  
								$s_no+=1; 
							  }
						   ?>
                         
                         </tbody>
                         </table>
                      </div>
  
                    </div>
     
                </div>
         
          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

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

	</body>
</html>