<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-shopping-cart"></i> Keranjang</h1>
  <p class="mb-4">Keranjang ini berisi daftar barang yang telah anda masukkan.</p>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-danger">Daftar Keranjang Belanja</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>Nama Produk</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Sub-Total</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>
              <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td class="text-center"><?php echo $items['qty'] ?></td>
                <td>Rp <?php echo number_format($items['price'], 2, ',', '.') ?></td>
                <td>Rp <?php echo number_format($items['subtotal'], 2, ',', '.') ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfooter>
            <tr>
              <td colspan="4" align="right">Grand Total</td>
              <td>Rp <?php echo number_format($this->cart->total(), 2, ',', '.') ?></td>
            </tr>
          </tfooter>
        </table>

        <div align="right">
          <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
          </a>
          <a href="<?php echo base_url('dashboard/pemesanan') ?>">
            <div class="btn btn-sm btn-success">Pesan</div>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>