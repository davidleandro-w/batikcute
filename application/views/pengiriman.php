<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-truck"></i> Dalam Pengiriman</h1>
  <p class="mb-4">Tabel ini berisi pesanan anda yang telah telah diberikan kekurir untuk dikirimkan ke alamat tujuan. Mohon ditunggu, terima kasih.</p>
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
            <?php if (is_array($pengiriman)) : ?>
              <?php
              foreach ($pengiriman as $png) : ?>
                <tr>
                  <td class="text-center"><?php echo $png->id ?></td>
                  <td><?php echo $png->nama ?></td>
                  <td><?php echo $png->alamat ?></td>
                  <td class="text-center">
                    <?php echo anchor(
                      'pengiriman/diterima/' . $png->id,
                      '<div class="btn btn-sm btn-success mb-1">Konfirmasi Telah Diterima</div>'
                    ) ?>
                    <?php echo anchor(
                      'invoice/detail_pesanan/' . $png->id,
                      '<div class="btn btn-sm btn-primary mb-1">Detail</div>'
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