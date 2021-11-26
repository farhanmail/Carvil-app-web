<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/carvil.png" alt="logo" height="50" width="200" class="shadow-light mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">CARVILL</span></h4>
            <p class="text-muted">Silahkan Login dengan Username yang telah terdaftar.</p>

            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
            <form method="POST" action="<?php echo base_url('auth/login') ?>">
              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2">
                 <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
              </div>
              <div class="form-group text-right">
                <a href="<?php echo base_url('auth/ganti_password') ?>" class="float-left mt-3">
                  Ganti Password 
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Don't have an account? <a href="<?php echo base_url('register') ?>">Create new one</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Your Company. Made with 💙 by Stisla
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/unsplash/pemandangan.png">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bogor, Indonesia</h5>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
