   <?php @session_start();?>
   <!-- Header -->
 <!DOCTYPE html>
<html lang="en">
   
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DesiFoodKart</title>
    <!-- Bootstrap Core CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">



         <script src="resources/js/myJs.js"></script>
    <script src="resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resources/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
   

    <!-- Custom CSS -->
    <link href="resources/css/full-slider.css" rel="stylesheet">
 

</head>
    <!-- Navigation -->
 <form action="login.php" method="post">   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span><img src="resources/image/logo.png" height="30px" width="100px"></span><font color="white">&nbspDesiFoodKart</font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="color:#03C">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">&nbsp;Home</a>
                    </li>
                    
                   
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                          data-hover="dropdown" data-delay="1000" data-close-others="false">
                           Cuisine Category  <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="bengalifood.php" >Bengali Food</a></li>
                                <li><a tabindex="-1" href="biharifood.php">Bihari Food</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="panjabifood.php">Panjabi Food</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="rajasthanifood.php">Rajasthani Food</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="southindianfood.php">South Indian Food</a></li>
                         </ul>
                   </li>
                   <?php 
				     if(!(isset($_SESSION['customer_login'])))
					   {
                    echo "<li class='dropdown'>";
                          echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' 
                          data-hover='dropdown' data-delay='1000' data-close-others='false'>
                           Login  <b class='caret'></b>";
                          echo "</a>";
                          echo "<ul class='dropdown-menu' style='border-radius:5px; border-top-left-radius:0px;
						  box-shadow:0px 0px 20px black'>";
                                echo "<li>";
                                 echo "<div style='width:300px; height:210px;'>";
								 
                                    echo "<p align='center'><input type='text' class='form-control' style='margin-top:20px; width:250px'
										id='cust_email' name='cust_email' placeholder='Username or Email'</p>";
									echo '<p align="center"><input type="password" class="form-control" style="margin-top:20px; width:250px" id="cust_password" name="cust_password" value="" placeholder="Password"</p>';
									echo '<p class="submit" style="margin-top:20px" align="center"><input type="submit" style="width:220px" value="Login" class="btn btn-success">';
									echo "</p>";
									echo "<div class='login-help' style='text-align:center'>";
									echo '<a href="registration_form.php">New User</a>';
									echo "</p>";
									echo "</div>";
								
                                echo "</div>";
                                echo "</li>";
                                
                                
                               
                         echo "</ul>";
                         
                     echo "</li>";
					}
				   ?>
                   
                   <?php 
				     if(isset($_SESSION['customer_login']))
					   {
                         echo"<li>";
                              echo"<a href='logout.php'>&nbsp;Logout</a>";
                          echo"</li>";
					   }
				   ?>
                   <?php 
				     if(isset($_SESSION['customer_login']))
					   {
                         echo"<li>";
                              echo"<a href='myorder.php'>&nbsp;My Order</a>";
                          echo"</li>";
					   }
				   ?>
                   
                </ul>
                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</form>

