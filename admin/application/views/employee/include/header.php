<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/stylesheet.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/bootstrap-theme.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/simple-sidebar.css'?>">
    <script src="<?php echo base_url().'resources/js/bootstrap.min.js'?>"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     
     
     
   </head>
    <body style="background:white">
      
 <nav class="navbar navbar-default navbar-fixed-top" style="background:black;  color:white;border:none; border-radius:0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse"  data-target=".navbar-collapse" aria-expanded="true">
      <span class=" icon-bar"></span>
      <span class=" icon-bar"></span>
      <span class=" icon-bar"></span>
  </button> 
          
     
      <a class="navbar-brand" href="#"><img src="<?php echo base_url().'resources/image/logo.png'?>" width="100px" height="30px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=" navbar-collapse collapse" >
      <ul class="nav navbar-nav" style="margin-left:120px">
              <li ><a href="<?php echo site_url('admin/emp_home');?>">Home</a></li>  
             <li  style="cursor:pointer" onClick="expandProfile()"><a>Profile</a>
        
        </li>
         
             
           <li ><a href="<?php echo site_url('admin/employee_logout');?>">LogOut</a></li>
           <li ><a href="<?php echo site_url('admin/emp_feedback');?>">Feedback</a></li>

        </ul>
    
      
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>