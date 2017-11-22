<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Toko Accessories</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('admin/css/bootstrap.min.css') ?>"/>
  <!-- bootstrap theme -->
  <link rel="stylesheet" href="<?php echo base_url('admin/css/bootstrap-theme.css') ?>"/>
  <!--external css-->
  <!-- font icon -->
  <link rel="stylesheet" href="<?php echo base_url('admin/css/elegant-icons-style.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/font-awesome/css/font-awesome.min.css') ?>"/>
  <!-- full calendar css-->
  <link rel="stylesheet" href="<?php echo base_url('admin/ass/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/ass/fullcalendar/fullcalendar/fullcalendar.css') ?>"/>
  <!-- easy pie chart-->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('admin/ass/jquery-easy-pie-chart/jquery.easy-pie-chart.css') ?>"/>
  <!-- owl carousel -->
  <link rel="stylesheet" type="<?php echo base_url('admin/text/css" href="css/owl.carousel.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery-jvectormap-1.2.2.css') ?>"/>
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('admin/css/fullcalendar.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/widgets.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/style.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/style-responsive.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/xcharts.min.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery-ui-1.10.4.min.css') ?>"/>
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Toko <span class="lite">Accesories</span></a>
      <!--logo end-->

      
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
        
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username');?><i class="fa fa-caret-down"></i>
                            
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="<?php echo site_url('Login/logout'); ?>"><i class="icon_key_alt"></i>Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
         <?php echo generate_sidemenu();?>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

     
