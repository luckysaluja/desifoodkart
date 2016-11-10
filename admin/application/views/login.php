<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     if(isset($_SESSION['admin_login_status']))
		{
		   redirect('admin/dashboard');
		}
	if(isset($_SESSION['employee_login_status']))
		{
		   redirect('admin/emp_home');
		}	
		

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Dashboard of Desifoodkart</title>
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/stylesheet.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/bootstrap-theme.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/simple-sidebar.css'?>">
    <script src="<?php echo base_url().'resources/js/bootstrap.min.js'?>"></script>
     <script src="jquery.js"></script>
  </head>


<body  style="background:#F1F1F1">
 <?php echo form_open('admin/authentication'); ?>
<div class="container"  style=" height:300px; width:300px;margin-top:150px; background:white; border-radius:10px">
    <div class="col-lg-12">
     <h3 style="text-align:center">cPanel</h3>
    </div>
    <div class="col-lg-12" style="margin-top:10px">
       <input type="text" class="form-control" placeholder="Enter Login ID" name="loginid" >
       <input type="password" class="form-control" placeholder="Enter Login Password" style="margin-top:10px" name="password">
    </div>
    <div class="col-lg-12" style="margin-top:10px; height:60px ; color:red">
     <?php echo validation_errors(); ?>
       &nbsp;&nbsp;<?php echo @$error_message;?>
    </div>
    <div class="col-lg-12" style="margin-top:10px; text-align:center">
    <select class="btn btn-default" name="login_type">
      <option>Admin</option>
      <option>Employee</option>
    </select>
      <input type="submit" value="Login"  class="btn btn-success">
      
    </div>
    <div class="col-lg-12" style="margin-top:10px; text-align:center">
      <a href="#">Forget Password</a>
      
    </div>

</div>

 <?php echo form_close();?>
 
 

</body>

</html>