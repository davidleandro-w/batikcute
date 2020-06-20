<div class="container-fluid">
  <div class="card mb-3 border-left-danger shadow-sm">
    <div class="card-body text-danger">
      <h4><strong>Hasil <?php echo $pencarian ?></strong></h4>
    </div>
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