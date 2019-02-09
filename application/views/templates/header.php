<!DOCTYPE html>
<html lang="en">

<head>
  
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/popuo-box.css'); ?>" rel="stylesheet" type="text/css" media="all">
  <!-- webfont-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">



</head>

<body>
  <!-- Top Header -->
  <div class="top-header">
    <div class="logo">
      <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=""></a>
        <p>Movie Theater</p>
    </div>
    <div class="search">
      <form action="<?php echo base_url('home/cari'); ?>" method="GET">
        <input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}" name="keyword" autocomplete="off">
        <input type="submit" alt="" name="cari-film" value="">
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
  <!-- End Top Header -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
              aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-togle" data-toggle="dropdown" href="">Movies </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url('home/movies_list/1') ?>">Now Playing</a>
              <a class="dropdown-item" href="<?php echo base_url('home/movies_list/0') ?>">Coming Soon</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/schedule') ?>">Schedule</a>
          </li>
        </ul>
          <?php if ($this->session->userdata('status') == 'login') : ?>
            <a class="navbar-text nav-item nav-link" href="<?php echo base_url('user'); ?>">Account</a>
            <a class="navbar-text nav-item nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>            
          <?php else : ?>
            <a class="navbar-text nav-item nav-link" href="<?php echo base_url('login'); ?>">Login</a>
            <a class="navbar-text nav-item nav-link" href="<?php echo base_url('login/register'); ?>">Register</a>
          <?php endif; ?>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
