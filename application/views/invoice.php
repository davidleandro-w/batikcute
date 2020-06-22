<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-file-invoice-dollar"></i> Belum Dibayar</h1>
  <p>Tabel ini berisi pesanan anda yang belum dibayar. Segera bayar tagihan sebelum batas waktu.</p>
  <h5 class="mb-4 breadcrumb text-danger font-weight-bold">Koin yang anda miliki:
    <?php
    $id = $this->session->userdata('id_user');
    $sql = "SELECT tb_user.koin_dimiliki as koin   
                      FROM tb_user                 
                      WHERE tb_user.id = $id";
    $koin = $this->db->query($sql)->row();
    echo $koin->koin;
    ?> koin
  </h5>
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
              <th>Tanggal Pemesanan</th>
              <th>Batas Pembayaran</th>
              <th>Pembayaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (is_array($invoice)) : ?>
              <?php
              foreach ($invoice as $inv) : ?>
                <tr>
                  <td class="text-center"><?php echo $inv->id ?></td>
                  <td><?php echo $inv->nama ?></td>
                  <td><?php echo $inv->alamat ?></td>
                  <td class="text-center"><?php echo $inv->tgl_pesan ?></td>
                  <td class="text-center"><?php echo $inv->batas_bayar ?></td>
                  <td class="text-center"><?php echo $inv->bank ?></td>
                  <td class="text-center"><?php echo anchor(
                                            'invoice/detail/' . $inv->id,
                                            '<div class="btn btn-sm btn-primary">Detail</div>'
                                          ) ?></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>