<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-check"></i> Selesai</h1>
  <p class="mb-4">Tabel ini berisi pesanan anda yang telah telah selesai dikirimkan dan anda terima. Terima kasih, silahkan berbelanja kembali.</p>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-danger">Daftar Pesanan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>Id Invoice</th>
              <th>Nama Penerima</th>
              <th>Alamat Pengiriman</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (is_array($selesai)) : ?>
              <?php
              foreach ($selesai as $png) : ?>
                <tr>
                  <td class="text-center"><?php echo $png->id ?></td>
                  <td><?php echo $png->nama ?></td>
                  <td><?php echo $png->alamat ?></td>
                  <td class="text-center"><?php echo anchor(
                                            'invoice/detail_pesanan/' . $png->id,
                                            '<div class="btn btn-sm btn-primary">Detail</div>'
                                          ) ?></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
          <!--
                  <tfooter>
                        <tr>
                            <td colspan="4"></td>
                            <td align="right">Rp <?php echo number_format($this->cart->total(), 2, ',', '.') ?></td>
                        </tr>
                    </tfooter> -->
        </table>
        <!--
                  <div align="right">
                      <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
                      <a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
                  </div>
                        -->
      </div>
    </div>
  </div>
</div>