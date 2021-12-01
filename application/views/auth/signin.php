<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>

<body>
    <section class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card-group">
                        <div class="card mx-auto" style="width:40%">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <a class="navbar-brand font-tertiary h3" href="<?= base_url()?>"><img src="<?php echo base_url(); ?>assets/home/images/site_logo/<?= $site_settings['logo'] ?>" alt="Myself" height="75px"></a>
                            </div>
                        </div>
                        <div class="card p-4">
                            <?= $this->session->flashdata('message'); ?>

                            <div class="card-header"><h4>Login</h4></div>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required value="<?= set_value('email'); ?>">
                                    <div class="invalid-feedback">
                                      Please fill in your email
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                    <div class="float-right">
                                        <a href="<?php echo base_url(); ?>auth/forgotPassword" class="text-small">
                                          Forgot Password?
                                      </a>
                                  </div>
                              </div>
                              <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                              <div class="invalid-feedback">
                                  Please fill in your password
                              </div>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                              Login
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
  
  <div class="mt-5 text-muted text-center">
      Don't have an account? <a href="<?php echo base_url(); ?>auth/registration">Create Account</a>
  </div>
  <div class="simple-footer">
      Copyright &copy; <?= $site_settings['title'] ?> 2021
  </div>
</div>
</div>

<!-- <div class="row justify-content-center">
    <footer class="col-md-10">
        <div class="row no-gutters align-items-center justify-content-center justify-content-md-between">
            <div class="col-md-4 mt-4 text-center text-md-left text-muted">
                <span>Copyright © </span>
                <a href="<?= base_url() ?>"><?= $site_settings['title'] ?></a>
                <div class="mt-1">Maritim Muda Hub v2.0</div>
            </div>
             <div class="col-md-2 mt-4 text-center text-md-left">
                <div class="text-muted">Didukung Oleh:</div>
                <div class="mt-1">
                    <a href="https://maritim.go.id/" class="text-decoration-none" target="_blank" rel="noopener">
                        <img class="img-fluid" style="width:40px" src="https://hub.maritimmuda.id/img/logo-kemenko-marves.png" alt="Kementerian Koordinator Bidang Kemaritiman dan Investasi" data-savepage-loading="lazy">
                    </a>
                    <a href="https://www.kkp.go.id/" class="text-decoration-none" target="_blank" rel="noopener">
                        <img class="img-fluid" style="width:47px" src="https://hub.maritimmuda.id/img/logo-kkp.png" alt="Kementerian Kelautan dan Perikanan" data-savepage-loading="lazy">
                    </a>
                    <a href="https://www.kemenpora.go.id/" class="text-decoration-none" target="_blank" rel="noopener">
                        <img class="img-fluid" style="width:40px" src="https://hub.maritimmuda.id/img/logo-kemenpora.png" alt="Kementerian Pemuda dan Olahraga" data-savepage-loading="lazy">
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-4 d-flex justify-content-center">
                <a href="#" class="d-flex flex-row align-items-center">
                    <img class="img-fluid" src="https://hub.maritimmuda.id/img/logo-ori.png" alt="Original Rekor Indonesia" data-savepage-loading="lazy">
                    <div class="ml-2 text-muted small">
                        <strong class="d-block">Rekor Nasional ORI</strong>
                        <span>Platform Digital Jejaring Nasional Pemuda Bidang Kemaritiman Pertama di Indonesia</span>
                    </div>
                </a>
            </div>
        </div>
    </footer>
</div>
</div> -->


</body>