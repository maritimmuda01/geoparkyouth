<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title><?= $title ?> Geopark Youth Forum</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="<?php echo base_url(); ?>assets/home/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>assets/home/images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="index.html"><img src="<?php echo base_url(); ?>assets/home/images/logo.png" alt="Myself"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>home/news">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>auth">Log In</a>
        </li>
      </ul>
    </div>
  </nav>
</header>