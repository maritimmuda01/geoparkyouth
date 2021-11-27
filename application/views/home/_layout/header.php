<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title><?= $title ?> <?= $site_settings['title'] ?></title>

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
  

<header class="navigation <?php echo $this->uri->segment(2) != 'single' ? 'navigation-main' : ''; ?> fixed-top <?php echo $this->uri->segment(2) == 'single' ? 'nav-bg' : ''; ?>">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="<?= base_url()?>"><img src="<?php echo base_url(); ?>assets/home/images/site_logo/<?= $site_settings['logo'] ?>" alt="Myself" height="75px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto navbar-links">
        <li class="navbar-dropdown nav-item ">
          <a class="nav-link" href="#">About</a>
          <div class="dropdown">
            <?php             
            foreach ($dataPageAbout as $data) { ?>
              <a href="<?= base_url()?>home/pages/<?= $data->id ?>"><?= $data->title ?></a>
            <?php } ?>
            <!-- <a href="<?= base_url()?>home/about">Geoparks Youth Hub</a>
            <a href="<?= base_url()?>home/geopark">Geopark</a>
            <a href="<?= base_url()?>home/globalgeoparknetwork">Global Geopark Network</a>
            <a href="<?= base_url()?>home/maritimmuda">Maritim Muda Nusantara</a> -->
          </div>
        </li>
        <li class="navbar-dropdown nav-item ">
          <a class="nav-link" href="#">Youth Forum</a>
          <div class="dropdown">
            <?php             
            foreach ($dataPageYouthForum as $data) { ?>
              <a href="<?= base_url()?>home/pages/<?= $data->id ?>"><?= $data->title ?></a>
            <?php } ?>

            <a href="<?= base_url()?>home/countries">Countries of Geopark</a>
          </div>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'media' ? 'active' : ''; ?>">
          <a class="nav-link" href="<?= base_url(); ?>home/media">Media</a>
        </li>
        <?php if ($this->session->userdata('email')) { ?>
        <li class="navbar-dropdown nav-item ">
          <?php if (!strpos($user['name'], ' ')) {
            $nickname = $user['name'];
          } else {
            $nickname = $user['name'];
          } ?>
          <a class="nav-link" href="#">Hi, <?=$nickname?> !</a>
          <div class="dropdown">
            <a href="<?= base_url(); ?>auth">Dashboard</a>
            <a href="<?= base_url(); ?>user/profile/<?= $this->session->userdata('id')?>">Profile</a>
            <a href="<?= base_url(); ?>user/settings">Settings</a>
            <a href="<?= base_url(); ?>auth/logout">Logout</a>
          </div>
        </li>
        <?php } else { ?>
        <li class="navbar-dropdown nav-item ">
          <a class="nav-link" href="#">Membership</a>
          <div class="dropdown">
            <a href="<?= base_url(); ?>auth">Login</a>
            <a href="<?= base_url(); ?>auth/registration">Registration</a>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>