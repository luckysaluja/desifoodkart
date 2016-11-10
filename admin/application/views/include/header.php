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
    <body>
      
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#F5F5F5; border:none; border-radius:0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          
     
      <a class="navbar-brand" href="#"><img src="<?php echo base_url().'resources/image/logo.png'?>" width="100px" height="30px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-left:120px">
        <li ><a href="<?php echo site_url('admin/dashboard')?>">Dashboard 
        <span class="sr-only">(current)</span></a></li>
        <li ><a href="<?php echo site_url('admin/administrator');?>">Administrator</a></li>
        <li ><a href="<?php echo site_url('admin/customer');?>">Customer</a></li>
          <li ><a href="<?php echo site_url('admin/order');?>">All Order</a></li>
           <li ><a href="<?php echo site_url('admin/admin_logout');?>">LogOut</a></li>
        </ul>
    
      
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>