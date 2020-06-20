<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Batikcute</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Belanja
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-tags"></i>
          <span>Tag Khusus</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header text-danger">Pilih Kategori:</h6>
            <a class="collapse-item" href="<?php echo site_url('pencarian/kategori/Pria') ?>">Pria</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/kategori/Wanita') ?>">Wanita</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/kategori/Anak') ?>">Anak-anak</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/kategori/Bahan') ?>">Bahan Kain</a>
            <h6 class="collapse-header text-danger">Pilih Jenis:</h6>
            <a class="collapse-item" href="<?php echo site_url('pencarian/jenis/Cap') ?>">Batik Cap</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/jenis/Tulis') ?>">Batik Tulis</a>
            <h6 class="collapse-header text-danger">Pilih Ukuran:</h6>
            <a class="collapse-item" href="<?php echo site_url('pencarian/ukuran/XL') ?>">XL</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/ukuran/L') ?>">L</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/ukuran/M') ?>">M</a>
            <a class="collapse-item" href="<?php echo site_url('pencarian/ukuran/S') ?>">S</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('dashboard/detail_keranjang') ?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Keranjang: <?php echo $this->cart->total_items() ?> items </span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pesanan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('invoice') ?>">
          <i class="fas fa-fw fa-file-invoice-dollar"></i>
          <span>Belum Dibayar</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pengemasan') ?>">
          <i class="fas fa-fw fa-dolly-flatbed"></i>
          <span>Sedang Dikemas</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pengiriman') ?>">
          <i class="fas fa-fw fa-truck"></i>
          <span>Dalam Pengiriman</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('selesai') ?>">
          <i class="fas fa-fw fa-check"></i>
          <span>Selesai</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars text-danger"></i>
          </button>

          <!-- Topbar Search -->
          <?php echo form_open('pencarian') ?>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group ">
              <input type="text" name="keyword" class="form-control bg-light border-0 small border-left-danger" placeholder="Cari produk.." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-danger" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <?php echo form_close() ?>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-danger" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <?php if ($this->session->userdata('email')) { ?>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_dpn') ?> <?php echo $this->session->userdata('nama_blkng') ?></span>
                  <img class="img-profile rounded-circle" src="<?php echo base_url() . '/assets/img/user/' . $this->session->userdata('foto') ?>">
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="<?php echo site_url('dashboard/detail_user') ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil Saya
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            <?php } else { ?> <li><?php echo anchor('auth/login', '<div class="ml-2">Login</div>'); ?></li>
            <?php } ?>
            <!-- Nav Item - User Information -->
          </ul>
          <!--
            <ul class="nav navbar-nav navbar-right">
              <?php if ($this->session->userdata('username')) { ?>
              <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
              <li><?php echo anchor('auth/logout', '<div class="ml-2">Logout</div>') ?></li>
              <?php } else { ?> <li><?php echo anchor('auth/login', '<div class="ml-2">Login</div>'); ?></li>
              <?php } ?>
            </ul> -->

        </nav>
        <!-- End of Topbar -->