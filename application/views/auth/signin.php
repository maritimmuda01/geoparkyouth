<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="fadKpPBsRb93v1XIFSH4zXYl0Fg2JYuI8ShrZs2z">

    <title><?= $title ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/auth.css">

</head>

<body class="c-app flex-row align-items-center" data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-group">
                    <div class="card mx-auto" style="width:40%">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-5.png" alt="">
                        </div>
                    </div>
                    <div class="card p-4">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="card-body">
                            <h2 class="mb-3">Login</h2>


                            <form method="POST" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
                                <style>
                                .inline-space > :not(template) {
                                    margin-right: 1.25rem;
                                }
                            </style>

                            <div class=" form-group ">
                                <label for="auto_id_email">Email</label>

                                <div class="input-group">

                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required value="<?= set_value('email'); ?>">
                                    <div class="invalid-feedback">
                                      Please fill in your email
                                  </div>


                              </div>


                          </div>

                          <div class=" form-group ">
                            <label for="auto_id_password">Password</label>

                            <div class="input-group">

                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                  Please fill in your password
                              </div>


                          </div>


                      </div>

                      <div class="row mb-4">
                        <div class="col-6">
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-link p-0" href="<?= base_url(); ?>auth/forgotPassword" tabindex="5">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" tabindex="4" class="btn btn-primary px-4">
                                Login
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-link my-1 p-0" href="<?= base_url(); ?>auth/registration" tabindex="6">
                                Create New Account
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row justify-content-center">
    <footer class="col-md-10">
        <div class="row no-gutters align-items-center justify-content-center justify-content-md-between">
            <div class="col-md-4 mt-4 text-center text-md-left text-muted">
                <span>Copyright © </span>
                <a href="<?= base_url() ?>">Global Geopark Youth Forum</a>
                <!-- <div class="mt-1">Maritim Muda Hub v2.0</div> -->
            </div>
            <!-- <div class="col-md-2 mt-4 text-center text-md-left">
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
            </div> -->
        </div>
    </footer>
</div>
</div>


</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>