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
                        <h3>Dashboard</h3>
                      
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12" style="height:380px">
                        
                       <?php
					   $src=base_url('./resources/image/dashboard.png');
					    echo "<img src='$src' width='100%'height='100%' >";
					   
					    ?>
                    </div>
                </div>
                
                <br />
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

            </div>
        </div>
        <!-- /#page-content-wrapper -->
      
    </div>
    <!-- /#wrapper -->
  
<script src="<?php link_tag('base_url')?>resources/js/jquery.js"></script>

 

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

	</body>
</html>