<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>images/site_settings/<?= $this->site_settings['logo'] ?>">

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/home/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/home/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/home/plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="<?= base_url() ?>assets/home/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="<?= base_url() ?>images/site_settings/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= base_url() ?>images/site_settings/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


  <header class="navigation fixed-top" style="z-index:99999;">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3 mt-1" href="<?= base_url() ?>"><img src="<?= base_url() ?>images/site_settings/<?= $this->site_settings['logo'] ?>" style="height: 50px;" alt="Myself"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto navbar-links">
          <li class="navbar-dropdown nav-item">
            <a class="nav-link" href="<?= base_url() ?>home">Home</a>
          </li>
          <?php foreach ($this->dataParent as $parent) { ?>
            <li class="navbar-dropdown nav-item">
              <a class="nav-link" href="#"><?= $parent->pageparent_name ?></a>
              <div class="dropdown">
                <?php
                foreach ($this->dataPages as $data) {
                  if ($data->pageparent_id == $parent->id_pageparent) {
                    if ($data->type == 1) { ?>
                      <a href="<?= base_url() ?>home/pages/<?= $data->id_pages ?>"><?= $data->title ?></a>
                    <?php } else { ?>
                      <a href="<?= $data->link ?>"><?= $data->title ?></a>
                    <?php }
                    ?>
                <?php }
                } ?>
              </div>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>home/media">Media</a>
          </li>
          <li class="navbar-dropdown nav-item">
            <?php if (!$this->session->userdata('email')) { ?>
              <a class="nav-link" href="<?= base_url() ?>auth">Membership</a>
              <div class="dropdown">
                <a href="<?= base_url() ?>auth">Login</a>
                <a href="<?= base_url() ?>auth/registration">Register</a>
              </div>
            <?php } else { ?>
              <a class="nav-link" href="<?= base_url() ?>auth">Hi, <?= $this->myData->name ?>!</a>
              <div class="dropdown">
                <a href="<?= base_url() ?>Dashboard">Dashboard</a>
                <a href="<?= base_url() ?>account">Profile</a>
                <a href="<?= base_url() ?>auth/logout">Logout</a>
              </div>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>