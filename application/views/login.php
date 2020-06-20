<body class="bg-gradient-danger">

  <div class="container">
    <br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img src="<?php echo base_url() ?>assets/img/login.jpg" width="100%"></div>
              <div class="col-lg-6">
                <div class="p-5 mt-2">
                  <div class="text-center">
                    <p class="font-weight-bold text-danger mb-1">Selamat Datang</p>
                    <h1 class="font-weight-bold text-danger">BATIKCUTE</h1>
                    <hr>
                    <p class="text-gray-900">Login untuk masuk ke sistem</p>
                  </div>
                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukkan email anda...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password yang sesuai...">
                    </div>
                    <button type="submit" class="btn btn-danger form-control">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small  text-danger" href="<?php echo base_url('registrasi'); ?>">Belum Punya Akun? Buat Akun Baru!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  </div>
  </div>


  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>