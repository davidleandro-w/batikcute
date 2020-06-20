<div class="container-fluid">
  <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/carousel1.jpg') ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="font-weight-bold">BATIKCUTE</h3>
          <p>Batikcute adalah website yang siap membantu anda memilih pakain batik terbaik.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/carousel2.jpg') ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="font-weight-bold">KEUNGGULAN</h3>
          <p> Tersedia dengan berbagai macam kategori dan pilihan motif batik.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/carousel3.jpg') ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="font-weight-bold">PENAWARAN</h3>
          <p> Dapatkan diskon untuk pengguna yang paling sering melakukan transaksi..</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row">

    <?php foreach ($barang as $brg) : ?>

      <div class="col-md-3 col-sm-6">
        <div class="card mb-4 shadow-sm border-bottom-danger">
          <img class="card-img-top" src="<?php echo base_url() . '/assets/img/produk/' . $brg->gambar ?>" alt="Card image cap">
          <div class="card-body">
            <div align="center">
              <h5 class="card-title"><strong><?php echo $brg->nama_brg ?></strong></h5>
              <hr>
              <small class="badge badge-secondary text-white">Stok <?php echo $brg->stok; ?></small>
              <small class="badge badge-warning text-white">Rp. <?php echo number_format($brg->harga, 2, ',', '.'); ?></small>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-2">
              <div class="btn-group">
                <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '
                <div href="" class="btn btn-sm btn-success mr-2" data-toggle="tooltip" data-placement="top" title="Masukkan ke keranjang">
                <i class="fas fa-shopping-cart"></i>
                </div>
                ') ?>

                <?php echo anchor('dashboard/detail/' . $brg->id_brg, '
                <div href="" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Detail">
                <i class="fas fa-info-circle"></i>
                </div>
                ') ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>